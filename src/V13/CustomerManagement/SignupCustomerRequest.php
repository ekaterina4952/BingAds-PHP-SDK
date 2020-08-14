<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Creates a new customer and account that rolls up to your aggregator payment method.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/signupcustomer?view=bingads-13 SignupCustomer Request Object
     * 
     * @uses Customer
     * @uses AdvertiserAccount
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerRequest
    {
        /**
         * A Customer that specifies the details of the customer that you are adding.
         * @var Customer
         */
        public $Customer;

        /**
         * An AdvertiserAccount that specifies the details of the customer's primary account.
         * @var AdvertiserAccount
         */
        public $Account;

        /**
         * The customer identifier of the aggregator that will manage this customer.
         * @var integer
         */
        public $ParentCustomerId;

        /**
         * Reserved.
         * @var UserInvitation
         */
        public $UserInvitation;
    }
}
