<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Events allow for matching intents by event name instead of the natural
 * language input. For instance, input `<event: { name: "welcome_event",
 * parameters: { name: "Sam" } }>` can trigger a personalized welcome response.
 * The parameter `name` may be used by the agent in the response:
 * `"Hello #welcome_event.name! What can I do for you today?"`.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.EventInput</code>
 */
class EventInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique identifier of the event.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * The collection of parameters associated with the event.
     * Depending on your protocol or client library language, this is a
     * map, associative array, symbol table, dictionary, or JSON object
     * composed of a collection of (MapKey, MapValue) pairs:
     * -   MapKey type: string
     * -   MapKey value: parameter name
     * -   MapValue type:
     *     -   If parameter's entity type is a composite entity: map
     *     -   Else: depending on parameter value type, could be one of string,
     *         number, boolean, null, list or map
     * -   MapValue value:
     *     -   If parameter's entity type is a composite entity:
     *         map from composite entity property names to property values
     *     -   Else: parameter value
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 2;</code>
     */
    private $parameters = null;
    /**
     * Required. The language of this query. See [Language
     * Support](https://cloud.google.com/dialogflow/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique identifier of the event.
     *     @type \Google\Protobuf\Struct $parameters
     *           The collection of parameters associated with the event.
     *           Depending on your protocol or client library language, this is a
     *           map, associative array, symbol table, dictionary, or JSON object
     *           composed of a collection of (MapKey, MapValue) pairs:
     *           -   MapKey type: string
     *           -   MapKey value: parameter name
     *           -   MapValue type:
     *               -   If parameter's entity type is a composite entity: map
     *               -   Else: depending on parameter value type, could be one of string,
     *                   number, boolean, null, list or map
     *           -   MapValue value:
     *               -   If parameter's entity type is a composite entity:
     *                   map from composite entity property names to property values
     *               -   Else: parameter value
     *     @type string $language_code
     *           Required. The language of this query. See [Language
     *           Support](https://cloud.google.com/dialogflow/docs/reference/language)
     *           for a list of the currently supported language codes. Note that queries in
     *           the same session do not necessarily need to specify the same language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique identifier of the event.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique identifier of the event.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The collection of parameters associated with the event.
     * Depending on your protocol or client library language, this is a
     * map, associative array, symbol table, dictionary, or JSON object
     * composed of a collection of (MapKey, MapValue) pairs:
     * -   MapKey type: string
     * -   MapKey value: parameter name
     * -   MapValue type:
     *     -   If parameter's entity type is a composite entity: map
     *     -   Else: depending on parameter value type, could be one of string,
     *         number, boolean, null, list or map
     * -   MapValue value:
     *     -   If parameter's entity type is a composite entity:
     *         map from composite entity property names to property values
     *     -   Else: parameter value
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The collection of parameters associated with the event.
     * Depending on your protocol or client library language, this is a
     * map, associative array, symbol table, dictionary, or JSON object
     * composed of a collection of (MapKey, MapValue) pairs:
     * -   MapKey type: string
     * -   MapKey value: parameter name
     * -   MapValue type:
     *     -   If parameter's entity type is a composite entity: map
     *     -   Else: depending on parameter value type, could be one of string,
     *         number, boolean, null, list or map
     * -   MapValue value:
     *     -   If parameter's entity type is a composite entity:
     *         map from composite entity property names to property values
     *     -   Else: parameter value
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * Required. The language of this query. See [Language
     * Support](https://cloud.google.com/dialogflow/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. The language of this query. See [Language
     * Support](https://cloud.google.com/dialogflow/docs/reference/language)
     * for a list of the currently supported language codes. Note that queries in
     * the same session do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

