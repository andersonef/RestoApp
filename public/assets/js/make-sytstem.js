const Alert = {
    NOTIFY_ERROR : "error",
    NOTIFY_SUCCESS : 'success',
    NOTIFY_CONFIRM : 'alert',
    notify : function(type, msg, buttons){
        if(!buttons) buttons = false;
        console.log('sou notify.. buttons vale: ', buttons);
        noty({
            text : msg,
            layout : 'center',
            type : type,
            modal : true,
            animation : {
                open : 'animated flipInX',
                close : 'animated flipOutX'
            },
            buttons : buttons
        })
    },
    success : function(msg){
        this.notify(this.NOTIFY_SUCCESS, msg);
    },
    error : function(msg){
        this.notify(this.NOTIFY_ERROR, msg);
    },
    confirm : function(msg, callback, btnok, btncancel){
        if(!btnok) btnok = 'Confirmar';
        if(!btncancel) btncancel = 'Cancelar';
        bootbox.confirm({
            title : 'ATENÇÃO',
            message : msg,
            buttons : {
                cancel : {
                    label : btncancel,
                    className : 'btn btn-default pull-left'
                },
                confirm : {
                    label : btnok,
                    className : 'btn btn-success pull-right'
                }
            },
            callback : callback
        });
    }
}


//pegando formulários com o atributo confirm e dando confirm antes de submeter:
$("form[confirm]").submit(function(evt){
    var self = $(this);
    var msg = self.attr('confirm') || 'ATENÇÃO: Tem certeza que deseja continuar?';
    if(!self.attr('confirmed')){
        Alert.confirm(msg, function(ok){
            if(!ok) return;
            self.attr('confirmed', true);
            self.get(0).submit();
        });
        evt.preventDefault();
        return;
    }
})

