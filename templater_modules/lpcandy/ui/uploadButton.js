teacss.ui.uploadButton = teacss.ui.button.extend({
    iconWidth: 64,
    iconHeight: 52
},{
    init: function (o) {
        var me = this;
        this._super($.extend({
            label: "Upload file",
            uploadDir: 'files'
        },o));
        
        var uploader = $("<input type='file'>").css({position:'fixed',top:0,left:0,zIndex:10000,width:0}).hide().appendTo("body");
        uploader.change(function(){
            var data = new FormData();
            $.each(uploader[0].files, function(i, file) {
                data.append('file-'+i, file);
            });
            data.append('_type','upload');
            data.append('name',me.options.uploadDir);
            data.append('iconWidth',me.Class.iconWidth);
            data.append('iconHeight',me.Class.iconHeight);
            
            $.ajax({
                url: Component.app.options.ajax_url,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data){
                    data = $.parseJSON(data);
                    me.value = data[0].url;
                    me.trigger("change");
                }
            });            
        });
        
        this.element.click(function(e){
            e.preventDefault();
            uploader.show();
            uploader.click();
            uploader.hide();
        });
    }
});
