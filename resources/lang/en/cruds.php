<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],

    'bidManagement' => [
        'title'          => 'Bids',
        'title_singular' => 'Bid',
        'fields'         => [
            'id'                   => 'ID',
            'price'                => 'Bid Price',
            'description'          => 'Description',
            'description_helper'   => '[Brief scope of work]',
            'document'             => 'Document',
            'document_helper'      => '[Maximum 5 Allow]',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'action'               => 'Action',
            'deleted_at_helper'    => ' ',
        ],
    ],

    'tenderManagement' => [
        'title'          => 'Tender ',
        'title_singular' => 'Tender',
        'fields'         => [
            'id'                   => 'ID',
            'tender_reference_no'  => 'Tender Reference No',
            'tender_title'         => 'Tender Title',
            'open_date'            => 'Open Date',
            'open_date_helper'     => '(yyyy-mm- hh:mm)',
            'close_date'           => 'Close Date',
            'close_date_helper'    => '(yyyy-mm- hh:mm)',
            'status'               => 'Status',
            'type'                 => 'Tender Type',
            'category_name'        => 'Tender Category',
            'material_name'        => 'Material Category',
            'category_name_helper' => '*',
            'description'          => 'Description',
            'description_helper'   => '[Brief scope of work]',
            'document'             => 'Document',
            'document_helper'      => '[Maximum 5 Allow]',
            'datetime'             => 'Date&Time',
            'invited_bidders'      => 'Invited Bidders',
            'alternative_sce_tbs'  => 'Alternative SCE/TBS',
            'created_by'           => 'Created By',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'action'               => 'Action',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'postTender' => [
        'title'          => 'Post Tender',
        'title_singular' => 'Post Tender',
    ],
    'listTender' => [
        'title'          => 'List Tender',
        'title_singular' => 'List Tender',
    ],
    'biidingMange' => [
        'title'          => 'Biiding Mange',
        'title_singular' => 'Biiding Mange',
    ],

    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'description'        => 'Description',
            'description_helper' => 'Description',
        ],
    ],
     'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'approved'                 => 'Approved',
            'approved_helper'          => ' ',
            'username'                 => 'Username',
            'username_helper'          => ' ',
            'contact_no_1'             => 'Contact No.1',
            'contact_no_1_helper'      => ' ',
            'contact_no_2'             => 'Contact No.2',
            'contact_no_2_helper'      => ' ',
            'status'                   => 'Status',
            'status_helper'            => ' ',
        ],
    ],
    'basicCRM'       => [
        'title'          => 'Basic CRM',
        'title_singular' => 'Basic CRM',
    ],
    'crmStatus'      => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmCustomer'    => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'first_name'         => 'First name',
            'first_name_helper'  => ' ',
            'last_name'          => 'Last name',
            'last_name_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'address'            => 'Address',
            'address_helper'     => ' ',
            'skype'              => 'Skype',
            'skype_helper'       => ' ',
            'website'            => 'Website',
            'website_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'crmNote'        => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'note'              => 'Note',
            'note_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmDocument'    => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'customer'             => 'Customer',
            'customer_helper'      => ' ',
            'document_file'        => 'File',
            'document_file_helper' => ' ',
            'name'                 => 'Document name',
            'name_helper'          => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'userAlert'      => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'tenderCategory' => [
        'title'          => 'Tender Category',
        'title_singular' => 'Tender Category',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'parent_id'            => 'Parent Category',
            'parent_id_helper'     => 'Parent Category',
            'category_code'        => 'Reference Code',
            'category_code_helper' => ' ',
            'category_name'        => 'Name',
            'category_name_helper' => 'Name',
            'description'          => 'Description',
            'description_helper'   => 'Description',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'bidderManager'  => [
        'title'          => 'Bidder User Manager',
        'title_singular' => 'Bidder User Manager',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'supplier_name'                 => 'Name of Company',
            'supplier_name_helper'          => 'Name of Company',
            'company_reg_number'            => 'Company Registration Number',
            'company_reg_number_helper'     => 'Company Registration Number',
            'company_contact_person'        => 'Company Contact Person',
            'company_contact_person_helper' => 'Company Contact Person',
            'email'                         => 'Main E-Mail Address',
            'email_helper'                  => 'Main E-Mail Address',
            'mobile'                        => 'Mobile Number',
            'mobile_helper'                 => 'Mobile Number',
            'address'                       => 'Company Address',
            'address_helper'                => 'Company Address',
            'status'                        => 'Status',
            'status_helper'                 => 'Status',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
        ],
    ],
    'material'       => [
        'title'          => 'Material',
        'title_singular' => 'Material',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'parent'               => 'Parent',
            'parent_helper'        => ' ',
            'category_name'        => 'Category Name',
            'category_name_helper' => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
];