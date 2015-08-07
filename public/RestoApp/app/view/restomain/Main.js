/**
 * This class is the main view for the application. It is specified in app.js as the
 * "mainView" property. That setting causes an instance of this class to be created and
 * added to the Viewport container.
 *
 * TODO - Replace this content of this view to suite the needs of your application.
 */
Ext.define('Resto.view.restomain.Main', {
    extend: 'Ext.tab.Panel',
    xtype: 'app-main',

    requires: [
        'Ext.MessageBox',
        'Ext.Panel',

        'Resto.view.restomain.MainController',
        'Resto.view.restomain.MainModel',
        'Resto.view.restomain.List',
        'Resto.view.restomain.Dashboard'
    ],

    controller: 'main',
    viewModel: 'main',

    defaults: {
        styleHtmlContent: true
    },

    //tabBarPosition: 'bottom',

    items: [
        {
            iconCls: 'x-fa fa-home',
            layout: 'fit',
            title : 'Painel Inicial',
            // The following grid shares a store with the classic version's grid as well!
            items: [{
                xtype: 'restomain-dashboard',
            }]
        },{
            title: 'Configurações',
            iconCls: 'x-fa fa-cog',
            bind: {
                html: '{loremIpsum}'
            }
        },{
            title: 'Encerrar',
            iconCls: 'x-fa fa-cog',
            bind: {
                html: '{loremIpsum}'
            }
        }
    ]
});
