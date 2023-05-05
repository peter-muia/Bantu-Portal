let merchantRef = db.collection('investors').doc('ke').collection('investor');
let b2bPos = {};
let deleteIDs = [];

const displayMerchant = async (doc) => {
	// console.log('displayMerchant');

	let merchant = merchantRef;
	// .startAfter(doc || 0).limit(10000)

	const data = await merchant.get();

	data.docs.forEach(doc => {
		const merchant = doc.data();
		let item =
			`<tr data-id="${doc.id}">
				
				<td class="text-dark text-sm font-weight-small mb-0">${merchant.firstname}</td>
				<td class="text-dark text-sm font-weight-small mb-0">${merchant.email}</td>
				<td class="text-dark text-sm font-weight-small mb-0">${merchant.phone}</td>
                		<td class="text-dark text-sm font-weight-small mb-0">${merchant.res_county}</td>
				<td class="text-dark text-sm font-weight-small mb-0">${merchant.identification}</td>
				<td class="text-dark text-sm font-weight-small mb-0">${merchant.id_number}</td>
				<td>
				<a href="/investors/view?id=${doc.id}&name=${merchant.firstname}&email=${merchant.email}&phone=${merchant.phone}" id="${doc.id}" class="edit js-view-merchant"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
				<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
				<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
			  	</svg></i>
				</a>
				</td>
			</tr>`;

			$(document).ready(function() {
				$('#merchant-table').DataTable();
			});

		$('#merchant-table').append(item);

		// ACTIVATE TOOLTIP
		$('[data-toggle="tooltip"]').tooltip();

		// SELECT/DESELECT CHECKBOXES
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function () {
			if (this.checked) {
				checkbox.each(function () {
					console.log(this.id);
					deleteIDs.push(this.id);
					this.checked = true;
				});
			} else {
				checkbox.each(function () {
					this.checked = false;
				});
			}
		});
		checkbox.click(function () {
			if (!this.checked) {
				$("#selectAll").prop("checked", false);
			}
		});
	})

	// UPDATE LATEST DOC
	latestDoc = data.docs[data.docs.length - 1];

	// UNATTACH EVENT LISTENERS IF NO MORE DOCS
	if (data.empty) {
		$('.js-loadmore').hide();
	}
}

$(document).ready(function () {

	let latestDoc = null;

	// LOAD INITIAL DATA
	displayMerchant();

	// LOAD MORE
	$(document).on('click', '.js-loadmore', function () {
		displayMerchant(latestDoc);
	});

	
// ADD Merchant
function uuidv4() { 
	return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
	  (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
	);
  }





	// UPDATE MERCHANT
	$(document).on('click', '.js-edit-merchant', function (e) {
		e.preventDefault();
		let id = $(this).attr('id');
		$('#edit-merchant-form').attr('edit-id', id);
		db.collection('b2b').doc('ke').collection('businesses').doc(id).get().then(function (document) {
			if (document.exists) {
				$('#edit-merchant-form #businessname').val(document.data().businessname);
				$('#edit-merchant-form #firstname').val(document.data().firstname);
                $('#edit-merchant-form #registration').val(document.data().registration);
				$('#edit-merchant-form #registration_number').val(document.data().registration_number);
				$('#edit-merchant-form #idcard').val(document.data().idcard);
				$('#edit-merchant-form #lastname').val(document.data().lastname);
				$('#edit-merchant-form #email').val(document.data().email);
				$('#edit-merchant-form #identification').val(document.data().identification);
				$('#edit-merchant-form #id_number').val(document.data().id_number);
				$('#edit-merchant-form #city').val(document.data().city);
				$('#edit-merchant-form #county').val(document.data().county);
				$('#edit-merchant-form #industry').val(document.data().industry);
				$('#edit-merchant-form #birthday').val(document.data().birthday);
				$('#edit-merchant-form #phone').val(document.data().phone);
				$('#edit-merchant-form #role').val(document.data().role);
				$('#edit-merchant-form #tax_number').val(document.data().tax_number);
				$('#editMerchantModal').modal('show');
			} else {
				console.log("No such document!");
			}
		}).catch(function (error) {
			console.log("Error getting document:", error);
		});
	});

	$("#edit-merchant-form").submit(function (event) {
		event.preventDefault();
		let id = $(this).attr('edit-id');
		let businessname = $('#edit-merchant-form #businessname').val();
		let firstname = $('#edit-merchant-form #firstname').val();
        let imageid = $('#edit-merchant-form #imageid').val();
		let lastname = $('#edit-merchant-form #lastname').val();
		let email = $('#edit-merchant-form #email').val();
		let identification = $('#edit-merchant-form #identification').val();
		let id_number = $('#edit-merchant-form #id_number').val();
		let city = $('#edit-merchant-form #city').val();
		let county = $('#edit-merchant-form #county').val();
		let industry = $('#edit-merchant-form #industry').val();
		let birthday = $('#edit-merchant-form #birthday').val();
		let phone = $('#edit-merchant-form #phone').val();
		let role = $('#edit-merchant-form #role').val();
		let tax_number = $('#edit-merchant-form #tax_number').val();

		db.collection('b2b').doc('ke').collection('businesses').doc(id).update({
			businessname: businessname,
			firstname: firstname,
                        imageid: imageid,
			lastname: lastname,
			email: email,
			identification: identification,
			id_number: id_number,
			city: city,
			county:county,
			industry:industry,
			birthday:birthday,
			phone:phone,
			role:role,
			tax_number:tax_number,
			updateTime : Math.round(+new Date()),
		});

		$('#editMerchantModal').modal('hide');

		// SHOW UPDATED DATA ON BROWSER
		// <td><img src="${merchant.logo}" alt="Image" style="width:48px;height:48px;"></td>
		$('tr[data-id=' + id + '] td.businessname').html(businessname);
		$('tr[data-id=' + id + '] td.firstname').html(firstname);
		$('tr[data-id=' + id + '] td.lastname').html(lastname);
		$('tr[data-id=' + id + '] td.email').html(email);
	});


	// SEARCH
	$("#search-name").keyup(function () {
		$('#merchant-table tbody').html('');
		let nameKeyword = $("#search-name").val();
		console.log(nameKeyword);
		merchantRef.orderBy('name', 'asc').startAt(nameKeyword).endAt(nameKeyword + "\uf8ff").get()
			.then(function (documentSnapshots) {
				documentSnapshots.docs.forEach(doc => {
					renderMerchant(doc);
				});
			});
	});

	// RESET FORMS
	$("#addMerchantModal").on('hidden.bs.modal', function () {
		$('#add-merchant-form .form-control').val('');
	});

	$("#editMerchantModal").on('hidden.bs.modal', function () {
		$('#edit-merchant-form .form-control').val('');
	});
});

// CENTER MODAL
(function ($) {
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
	$(window).on("resize", function () {
		$('.modal:visible').each(centerModal);
	});
}(jQuery));

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
	
    	b2bPos = {
			lat: place.geometry.location.lat(),
			lng: place.geometry.location.lng()
		}
	});
  }

let selectedFilterElement;

function initListener() {
  const buttons = document.querySelectorAll(".filters");
  buttons.forEach((button) => button.addEventListener('click', () => {
    if (selectedFilterElement) {
      selectedFilterElement.classList.remove('selected');
    }
    selectedFilterElement = button;
    selectedFilterElement.classList.add('selected');

    // filterSelection(button.dataset.filter);
  }));
}


