<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class IpAddressContext extends InstanceContext
    {
    /**
     * Initialize the IpAddressContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for this resource.
     * @param string $ipAccessControlListSid The IpAccessControlList Sid with which to associate the created IpAddress resource.
     * @param string $sid A 34 character string that uniquely identifies the resource to delete.
     */
    public function __construct(
        Version $version,
        $accountSid,
        $ipAccessControlListSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        'ipAccessControlListSid' =>
            $ipAccessControlListSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/SIP/IpAccessControlLists/' . \rawurlencode($ipAccessControlListSid)
        .'/IpAddresses/' . \rawurlencode($sid)
        .'.json';
    }

    /**
     * Delete the IpAddressInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }


    /**
     * Fetch the IpAddressInstance
     *
     * @return IpAddressInstance Fetched IpAddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): IpAddressInstance
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->fetch('GET', $this->uri, [], [], $headers);

        return new IpAddressInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['ipAccessControlListSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the IpAddressInstance
     *
     * @param array|Options $options Optional Arguments
     * @return IpAddressInstance Updated IpAddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): IpAddressInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'IpAddress' =>
                $options['ipAddress'],
            'FriendlyName' =>
                $options['friendlyName'],
            'CidrPrefixLength' =>
                $options['cidrPrefixLength'],
        ]);

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new IpAddressInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['ipAccessControlListSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.IpAddressContext ' . \implode(' ', $context) . ']';
    }
}