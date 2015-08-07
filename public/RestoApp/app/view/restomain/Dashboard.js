Ext.define('Resto.view.restomain.Dashboard', {

    extend : 'Ext.Panel',
    requires : [
        'Ext.Menu'
    ],
    title : 'Painel Principal',
    xtype: 'restomain-dashboard',
    items : [
        {
            xtype: 'menu',
            docked : 'left',
            floating : true,
            width : '10%',
            height : '100%',
            title : 'Menu',
            items : [
                {text : 'Produtos'},
                {text : 'Vendas'},
                {text : 'Refeições'}
            ]
        },
        {
            marginLeft : '10px',
            xtype : 'tabpanel',
            width : '100%',
            height : '100%',
            items : [
                {
                    title: 'Users',
                    iconCls: 'x-fa fa-user',
                    bind: {
                        html: '{loremIpsum}'
                    }
                },{
                    title: 'Groups',
                    iconCls: 'x-fa fa-users',
                    bind: {
                        html: '{loremIpsum}'
                    }
                },{
                    title: 'Settings',
                    iconCls: 'x-fa fa-cog',
                    bind: {
                        html: '{loremIpsum}'
                    }
                }
            ]
        }
    ]
});