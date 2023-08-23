<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 50,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 51,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 52,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 53,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 54,
                'title' => 'package_access',
            ],
            [
                'id'    => 55,
                'title' => 'package_list_create',
            ],
            [
                'id'    => 56,
                'title' => 'package_list_edit',
            ],
            [
                'id'    => 57,
                'title' => 'package_list_show',
            ],
            [
                'id'    => 58,
                'title' => 'package_list_delete',
            ],
            [
                'id'    => 59,
                'title' => 'package_list_access',
            ],
            [
                'id'    => 60,
                'title' => 'package_item_create',
            ],
            [
                'id'    => 61,
                'title' => 'package_item_edit',
            ],
            [
                'id'    => 62,
                'title' => 'package_item_show',
            ],
            [
                'id'    => 63,
                'title' => 'package_item_delete',
            ],
            [
                'id'    => 64,
                'title' => 'package_item_access',
            ],
            [
                'id'    => 65,
                'title' => 'subscriber_profile_create',
            ],
            [
                'id'    => 66,
                'title' => 'subscriber_profile_edit',
            ],
            [
                'id'    => 67,
                'title' => 'subscriber_profile_show',
            ],
            [
                'id'    => 68,
                'title' => 'subscriber_profile_delete',
            ],
            [
                'id'    => 69,
                'title' => 'subscriber_profile_access',
            ],
            [
                'id'    => 70,
                'title' => 'setting_create',
            ],
            [
                'id'    => 71,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 72,
                'title' => 'setting_show',
            ],
            [
                'id'    => 73,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 74,
                'title' => 'setting_access',
            ],
            [
                'id'    => 75,
                'title' => 'work_order_create',
            ],
            [
                'id'    => 76,
                'title' => 'work_order_edit',
            ],
            [
                'id'    => 77,
                'title' => 'work_order_show',
            ],
            [
                'id'    => 78,
                'title' => 'work_order_delete',
            ],
            [
                'id'    => 79,
                'title' => 'work_order_access',
            ],
            [
                'id'    => 80,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
