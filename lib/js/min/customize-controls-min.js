!function($,t){t.controlConstructor["checkbox-multiple"]=t.Control.extend({ready:function(){var t=this;$("input:checkbox",t.container).change(function(){var e=$('input[type="checkbox"]:checked',t.container).map(function(){return this.value}).get();null===e?t.setting.set(""):t.setting.set(e)})}}),t.controlConstructor.palette=t.Control.extend({ready:function(){var t=this;$("input:radio:checked",t.container).parent("label").addClass("selected"),$("input:radio",t.container).change(function(){$("label.selected",t.container).removeClass("selected"),$(this).parent("label").addClass("selected"),t.setting.set($(this).val())})}}),t.controlConstructor["radio-image"]=t.Control.extend({ready:function(){var t=this;$("input:radio",t.container).change(function(){t.setting.set($(this).val())})}}),t.controlConstructor["select-group"]=t.Control.extend({ready:function(){var t=this;$("select",t.container).change(function(){t.setting.set($(this).val())})}}),t.controlConstructor["select-multiple"]=t.Control.extend({ready:function(){var t=this;$("select",t.container).change(function(){var e=$(this).val();null===e?t.setting.set(""):t.setting.set(e)})}})}(jQuery,wp.customize);