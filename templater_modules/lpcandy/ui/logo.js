lp.cover = teacss.ui.control.extend({
    init: function (o) {
        var me = this;
        this._super(o);
        this.element = this.options.element;
        me.cover = $("<div class='cmp-cover fa fa-gear'>")
            .click(function(){ 
                me.config({my:"left center",at:"right+5px center+56px",of:me.cover,collision:"flipfit"});
            })
            .appendTo(this.element);
        
        if (me.options.init) me.options.init.call(me);
    },
    config: lp.block.prototype.config
});


lp.logo = lp.cover.extendOptions({
    change: function(){
        var me = this;
        me.cover.detach();
        me.element.empty();
        if (me.value.type=="image") {
            me.element.append($("<img>").attr({src:me.value.url,width:me.value.size+"%"}));
        } else {
            me.element.append($("<span>").text(me.value.text).css({
                fontStyle: me.value.italic ? 'italic' : '',
                fontWeight: me.value.bold ? 'bold' : '',
                fontFamily: me.value.font || '',
                color: me.value.color || '',
                fontSize: me.value.fontSize ? me.value.fontSize + 'px' : ''
            }));
        }
        me.cover.appendTo(me.element);
    },
    configForm: {
        title: "Logotype",
        items: [
            {
                name: 'type', type: 'radio', margin: "15px 0 20px", items: [
                    { label: "Image logo ", value: 'image' },
                    { label: "Text name logo", value: 'text' }
                ]
            },
            {
                name: 'url', type: 'uploadButton', label: 'Upload image file',
                showWhen: { type: 'image' }
            },
            {
                type: 'label',
                value: "Company name:",
                showWhen: { type: 'text' }
            },
            {
                name: "text", type: "text",
                showWhen: { type: 'text' }
            },
            { 
                type: 'label',
                value: "Font settings:",
                showWhen: { type: 'text' }
            },
            {
                name: "font", type: "fontCombo", width: '50%',
                showWhen: { type: 'text' }
            },
            {
                name: "bold", label: "<b>B</b>", type: "check", width: 27, height: 27, 
                margin: "0 0 10px 5px", showCheckbox: false,
                showWhen: { type: 'text' }
            },
            {
                name: "italic", label: "<i>I</i>", type: "check", width: 27, height: 27, 
                margin: "0 0 10px 5px", showCheckbox: false,
                showWhen: { type: 'text' }
            },
            {
                name: "color", type: "colorPicker", width: 27, height: 27, margin: "0 0 10px 5px",
                showWhen: { type: 'text' }
            },
            "Size:",
            {
                margin: "5px 0",
                name: 'size', type: 'slider', min: 0, max: 100,
                showWhen: { type: 'image' }
            },
            {
                margin: "5px 0",
                name: 'fontSize', type: 'slider', min: 8, max: 100,
                showWhen: { type: 'text' }
            }
        ]
    }
})