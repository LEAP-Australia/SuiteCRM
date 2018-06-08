<?php
$module_name = 'CM4_Purchases';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'invoice',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'purchase_date',
            'label' => 'LBL_PURCHASE_DATE',
          ),
          1 => 
          array (
            'name' => 'purchase_date_paid',
            'label' => 'LBL_PURCHASE_DATE_PAID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_booked',
            'label' => 'LBL_DATE_BOOKED',
          ),
          1 => 
          array (
            'name' => 'date_sent',
            'label' => 'LBL_DATE_SENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'license_process_step',
            'studio' => 'visible',
            'label' => 'LBL_LICENSE_PROCESS_STEP',
          ),
          1 => 
          array (
            'name' => 'myob_purchase_id',
            'label' => 'LBL_MYOB_PURCHASE_ID',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
