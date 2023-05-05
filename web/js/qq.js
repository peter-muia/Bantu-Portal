let onboardRef = db.collection('investors').doc('ke').collection('investor');
let merchantPos = {};
let deleteIDs = [];

const displaymsform = async (doc) => {
	// console.log('displaymsform');

	let msform = msformRef;
	// .startAfter(doc || 0).limit(10000)

	const data = await msform.get();

	data.docs.forEach(doc => {
		const msform = doc.data();
		let item =
			`<tr data-id="${doc.id}">
				<td>
					<span class="custom-checkbox">
						<input type="checkbox" id="${doc.id}" name="options[]" value="${doc.id}">
						<label for="${doc.id}"></label>
					</span>
				</td>
				<td><img src="${msform.idcard}" alt="Image" style="width:48px;height:48px;"></td>
				<td class="text-secondary text-xs font-weight-bold me-15">${msform.name}</td>
				<td class="text-ps font-weight-bold mb-0 me-15">${msform.email}</td>
				<td>${msform.phone}</td>
				<td>${msform.id_number}</td>
				<td>${msform.country}</td>
				<td>
					<a href="#" id="${doc.id}" class="edit js-edit-msform"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
					</a>
					<a href="#" id="${doc.id}" class="delete js-delete-msform"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
					</a>
				</td>
			</tr>`;

			$(document).ready(function() {
				$('#msform-table').DataTable();
			});

		$('#msform-table').append(item);

		// ACTIVATE TOOLTIP
		$('[data-toggle="tooltip"]').tooltip();
	})
}

$( document ).ready(function() {
	console.log( "ready!" );
    
	var uuid = window.uuid;  
	var idcard = document.getElementById('identity');
	var idcardUploading = false;
    idcard.addEventListener('change', function(e) {
        var idcard = e.target.files[0];
        var storageRef = firebase.storage().ref('investors/ke/' + uuid + '/' + idcard.name);
		var task = storageRef.put(idcard);
		task.on('state_changed', function progress(snapshot) {
			},
			function error(err) {
				console.log(err);
			},
			
			function() {
				console.log("This ID with ID: ", (uuid));
				// get the uploaded image url back

				task.snapshot.ref.getDownloadURL().then(function(idcard) {
					console.log('ID available at', idcard);
                    window.idcard = idcard;
                    idcardUploading = false;
				});
			});
		});

    var registration = document.getElementById('registration');
	var registrationUploading = false;
    registration.addEventListener('change', function(e) {
        var registration = e.target.files[0];
        var storageRef = firebase.storage().ref('investors/ke/' + uuid + '/' + registration.name);
		var task = storageRef.put(registration);
		task.on('state_changed', function progress(snapshot) {
				
			},
			function error(err) {
				console.log(err);
			},
			
			function() {
				console.log("This ID with registration: ", (uuid));
				// get the uploaded image url back

				task.snapshot.ref.getDownloadURL().then(function(registration) {
					console.log('registration available at', registration);
					window.registration = registration;
                    registrationUploading = false;
				});
			});
		});

    $("#submitform").on("click", submit);

    function submit() {
        console.log("Test Submit");
        if (window.idcard == null || window.idcard == "") {
            alert(idcardUploading ? "Please wait for ID to be uploaded" : "Please attach your ID");
            return false;
        }
        if (window.registration == null || window.registration == "") {
            alert(registrationUploading ? "Please wait for registration document to be uploaded" : "Please attach your Registration Document");
            return false;
        }
        msform.addEventListener("submit", (e) => {
			e.preventDefault();
			alert("Your documents have been submitted! \n Click ok and wait for verification");
		  });
    }
    $("#msform").submit(function(event) {
        console.log("This is with ID: ", (uuid));
        event.preventDefault();
        let id = (uuid);
        let pos = merchantPos;
        let firstname = $('#firstname').val();
        let lastname = $('#lastname').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let gender = $('#gender').val();
        let birthday = $('#birthday').val();
        let res_county = $('#res_county').val();
        let identification = $('#identification').val();
        let id_number = $('#id_number').val();
        let idcard = (window.idcard);
        let file = (window.registration);
        console.log("written with ID: ", (uuid));
        db
            .collection('investors')
            .doc('ke')
            .collection('investor')
            .doc(uuid)
            .set({
                id: id,
                geo: new firebase.firestore.GeoPoint(pos.lat, pos.lng),
                firstname: firstname,
                lastname: lastname,
                email: email,
                phone: phone,
                gender: gender,
                birthday: birthday,
                res_county: res_county,
                identification: identification,
                id_number: id_number,
                idcard: idcard,
                registration: file,
                createTime: Math.round(+new Date()),
                updateTime: Math.round(+new Date()),
            }).then(function(docRef) {
                console.log("b2b's Document written with ID: ", (uuid));
            })
            .catch(function(error) {
                console.error("Error writing document: ", error);
            });
            // You get your url from here
					console.log('File available at', idcard);
    });
 });

// CENTER MODAL
(function($) {
		"use strict";

		function centerModal() {
			$(this).css('display', 'block');
			var $dialog = $(this).find(".modal-dialog"),
				offset = ($(window).height() - $dialog.height()) / 2,
				bottomMargin = parseInt($dialog.css('marginBottom'), 10);

			// Make sure you don't hide the top part of the modal w/ a negative margin if it's longer than the screen height, and keep the margin equal to the bottom margin of the modal
			if (offset < bottomMargin) offset = bottomMargin;
			$dialog.css("margin-top", offset);
		}

		$(document).on('show.bs.modal', '.modal', centerModal);
		$(window).on("resize", function() {
			$('.modal:visible').each(centerModal);
		});
	}
	(jQuery)
);

function toTitleCase(str) {
	return str.replace(
		/\w\S*/g,
		function(txt) {
			return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		}
	);
}

function initService() {
	var input = document.getElementById('places');
	var autocomplete = new google.maps.places.Autocomplete(input);

	autocomplete.addListener('place_changed', function() {
		var place = autocomplete.getPlace();
		if (!place.geometry) {
			window.alert("Autocomplete's returned place contains no geometry");
			return;
		}

		merchantPos = {
			lat: place.geometry.location.lat(),
			lng: place.geometry.location.lng()
		}
	});
}

let selectedFilterElement;

(function($) {
	"use strict";

	//* Form js
	function verificationForm() {
		//jQuery time
		var current_fs, next_fs, previous_fs; //fieldsets
		var left, opacity, scale; //fieldset properties which we will animate
		var animating; //flag to prevent quick multi-click glitches

		$(".next").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50) + "%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'transform': 'scale(' + scale + ')',
						'position': 'absolute'
					});
					next_fs.css({
						'left': left,
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".previous").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//de-activate current step on progressbar
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale previous_fs from 80% to 100%
					scale = 0.8 + (1 - now) * 0.2;
					//2. take current_fs to the right(50%) - from 0%
					left = ((1 - now) * 50) + "%";
					//3. increase opacity of previous_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'left': left
					});
					previous_fs.css({
						'transform': 'scale(' + scale + ')',
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".submit").click(function() {
			return false;
		})
	};

	//* Add Phone no select
	function phoneNoselect() {
		if ($('#msform').length) {
			$("#phone").intlTelInput();
			$("#phone").intlTelInput("setNumber", "+1");
		};
	};
	//* Select js
	function nice_Select() {
		if ($('.product_select').length) {
			$('select').niceSelect();
		};
	};
	/*Function Calls*/
	verificationForm();
	phoneNoselect();
	nice_Select();
})(jQuery);


