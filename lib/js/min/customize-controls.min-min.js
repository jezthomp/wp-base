!function(t,e){e.controlConstructor["checkbox-multiple"]=e.Control.extend({ready:function(){var e=this;t("input:checkbox",e.container).change(function(){var n=t('input[type="checkbox"]:checked',e.container).map(function(){return this.value}).get();null===n?e.setting.set(""):e.setting.set(n)})}}),e.controlConstructor.palette=e.Control.extend({ready:function(){var e=this;t("input:radio:checked",e.container).parent("label").addClass("selected"),t("input:radio",e.container).change(function(){t("label.selected",e.container).removeClass("selected"),t(this).parent("label").addClass("selected"),e.setting.set(t(this).val())})}}),e.controlConstructor["radio-image"]=e.Control.extend({ready:function(){var e=this;t("input:radio",e.container).change(function(){e.setting.set(t(this).val())})}}),e.controlConstructor["select-group"]=e.Control.extend({ready:function(){var e=this;t("select",e.container).change(function(){e.setting.set(t(this).val())})}}),e.controlConstructor["select-multiple"]=e.Control.extend({ready:function(){var e=this;t("select",e.container).change(function(){var n=t(this).val();null===n?e.setting.set(""):e.setting.set(n)})}})}(jQuery,wp.customize);