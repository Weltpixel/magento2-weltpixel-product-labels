define([
    'jquery',
    'Magento_Ui/js/form/element/select'
], function ($, Select) {
    'use strict';

    return Select.extend({
        defaults: {
            customName: '${ $.parentName }.${ $.index }_input'
        },
        /**
         * show/hide position field
         * @param id
         */
        updateInputOption: function(id){
            if($("#"+id).val() == 1) {
                $("#"+id).parents('.admin__field').siblings().hide();
            } else {
                $("#"+id).parents('.admin__field').siblings().show();
            }
        },
    });
});
