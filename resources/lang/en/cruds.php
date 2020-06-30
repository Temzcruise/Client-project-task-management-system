<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'picture'                  => 'Picture',
            'picture_helper'           => '',
        ],
    ],
    'auditLog'          => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
    'projectManagement' => [
        'title'          => 'Project Management',
        'title_singular' => 'Project Management',
    ],
    'clientManagement'  => [
        'title'          => 'Client Management',
        'title_singular' => 'Client Management',
    ],
    'projectType'       => [
        'title'          => 'Project Type',
        'title_singular' => 'Project Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'projectSubType'    => [
        'title'          => 'Project Sub Type',
        'title_singular' => 'Project Sub Type',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'project_type'        => 'Project Type',
            'project_type_helper' => '',
            'name'                => 'Name',
            'name_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'taskManagement'    => [
        'title'          => 'Task Management',
        'title_singular' => 'Task Management',
    ],
    'document'          => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'version'           => 'Version',
            'version_helper'    => '',
            'file'              => 'File',
            'file_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'client'            => 'Client',
            'client_helper'     => '',
            'project'           => 'Project',
            'project_helper'    => '',
        ],
    ],
    'client'            => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'name'                      => 'Company Name',
            'name_helper'               => '',
            'address'                   => 'Address',
            'address_helper'            => '',
            'date_of_engagement'        => 'Date Of Engagement',
            'date_of_engagement_helper' => '',
            'status'                    => 'Status',
            'status_helper'             => '',
            'expiry_date'               => 'Expiry Date',
            'expiry_date_helper'        => '',
            'email'                     => 'Email',
            'email_helper'              => '',
            'phone'                     => 'Phone',
            'phone_helper'              => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
        ],
    ],
    'project'           => [
        'title'          => 'Project',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'client'               => 'Client',
            'client_helper'        => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'project_type'         => 'Project Type',
            'project_type_helper'  => '',
            'starting_date'        => 'Starting Date',
            'starting_date_helper' => '',
            'deadline'             => 'Deadline',
            'deadline_helper'      => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'manager'              => 'Manager',
            'manager_helper'       => '',
            'team_members'         => 'Team Members',
            'team_members_helper'  => '',
        ],
    ],
    'projectComment'    => [
        'title'          => 'Project Comments',
        'title_singular' => 'Project Comment',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'user'                   => 'User',
            'user_helper'            => '',
            'project'                => 'Project',
            'project_helper'         => '',
            'client'                 => 'Client',
            'client_helper'          => '',
            'comments'               => 'Comments',
            'comments_helper'        => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
            'action_required'        => 'Action Required',
            'action_required_helper' => '',
        ],
    ],
    'tastCategory'      => [
        'title'          => 'Tast Category',
        'title_singular' => 'Tast Category',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'name'                => 'Name',
            'name_helper'         => '',
            'project_type'        => 'Project Type',
            'project_type_helper' => '',
            'sub_category'        => 'Sub Category',
            'sub_category_helper' => '',
            'weight'              => 'Weight',
            'weight_helper'       => 'Used for ordering and hierarchy',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
            'description'         => 'Description',
            'description_helper'  => '',
        ],
    ],
    'clientPortal'      => [
        'title'          => 'Client Portal',
        'title_singular' => 'Client Portal',
    ],
    'task'              => [
        'title'          => 'Task',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'category'             => 'Category',
            'category_helper'      => '',
            'starting_date'        => 'Starting Date',
            'starting_date_helper' => '',
            'ending_date'          => 'Ending Date',
            'ending_date_helper'   => '',
            'assinged_to'          => 'Assinged To',
            'assinged_to_helper'   => '',
            'manager'              => 'Manager',
            'manager_helper'       => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'status'               => 'Status',
            'status_helper'        => '',
            'project'              => 'Project',
            'project_helper'       => '',
            'client'               => 'Client',
            'client_helper'        => '',
        ],
    ],
    'taskStatus'        => [
        'title'          => 'Task Status',
        'title_singular' => 'Task Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'taskComment'       => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'comments'          => 'Comments',
            'comments_helper'   => '',
            'user'              => 'User',
            'user_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'task'              => 'Task',
            'task_helper'       => '',
            'client'            => 'Client',
            'client_helper'     => '',
            'project'           => 'Project',
            'project_helper'    => '',
        ],
    ],
    'taskCommentReply'  => [
        'title'          => 'Comment Reply',
        'title_singular' => 'Comment Reply',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'task_comment'              => 'Comment',
            'task_comment_helper'       => '',
            'task_comment_reply'        => 'Comment Reply',
            'task_comment_reply_helper' => '',
            'reply_by'                  => 'Reply By',
            'reply_by_helper'           => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
        ],
    ],
    'taskPortal'        => [
        'title'          => 'Task portal',
        'title_singular' => 'Task portal',
    ],
    'taskDocument'      => [
        'title'          => 'Task Document',
        'title_singular' => 'Task Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Document Name',
            'name_helper'          => '',
            'document_type'        => 'Document Type',
            'document_type_helper' => '',
            'document'             => 'Document',
            'document_helper'      => '',
            'comment'              => 'Comment',
            'comment_helper'       => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'task'                 => 'Task',
            'task_helper'          => '',
            'project'              => 'Project',
            'project_helper'       => '',
            'client'               => 'Client',
            'client_helper'        => '',
        ],
    ],
    'projectReport'     => [
        'title'          => 'Project Report',
        'title_singular' => 'Project Report',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'project_report'        => 'Project Report',
            'project_report_helper' => '',
            'uploads'               => 'Uploads',
            'uploads_helper'        => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
            'project'               => 'Project',
            'project_helper'        => '',
            'client'                => 'Client',
            'client_helper'         => '',
        ],
    ],
    'letterMgt'         => [
        'title'          => 'Letter Mgt',
        'title_singular' => 'Letter Mgt',
    ],
    'letterType'        => [
        'title'          => 'Letter Type',
        'title_singular' => 'Letter Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'payrollLetter'     => [
        'title'          => 'Payroll Letter',
        'title_singular' => 'Payroll Letter',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => '',
            'client'                        => 'Client',
            'client_helper'                 => '',
            'date'                          => 'Date',
            'date_helper'                   => '',
            'contact_person'                => 'Contact Person',
            'contact_person_helper'         => '',
            'company_short_name'            => 'Company Short Name',
            'company_short_name_helper'     => '',
            'created_at'                    => 'Created at',
            'created_at_helper'             => '',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => '',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => '',
            'project'                       => 'Project',
            'project_helper'                => '',
            'staff_name'                    => 'Staff Name',
            'staff_name_helper'             => '',
            'client_summary'                => 'Client Summary',
            'client_summary_helper'         => '',
            'fees_table'                    => 'Fees Table',
            'fees_table_helper'             => '',
            'fees_footer'                   => 'Fees Footer',
            'fees_footer_helper'            => '',
            'other_services_charges'        => 'Other Services Charges',
            'other_services_charges_helper' => '',
            'services'                      => 'Services',
            'services_helper'               => '',
            'type'                          => 'Type',
            'type_helper'                   => '',
        ],
    ],
    'servicesFee'       => [
        'title'          => 'Services Fees',
        'title_singular' => 'Services Fee',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Name',
            'name_helper'          => '',
            'amount'               => 'Amount',
            'amount_helper'        => 'amount per month',
            'currency'             => 'Currency',
            'currency_helper'      => '',
            'currency_rate'        => 'Currency Rate',
            'currency_rate_helper' => 'rate to NGN',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
            'details'              => 'Details',
            'details_helper'       => '',
        ],
    ],
];