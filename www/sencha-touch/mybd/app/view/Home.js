/*
 * File: app/view/Home.js
 *
 * This file was generated by Sencha Architect version 2.2.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Sencha Touch 2.1.x library, under independent license.
 * License of Sencha Architect does not include license for Sencha Touch 2.1.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('myBD.view.Home', {
    extend: 'Ext.Panel',

    config: {
        ui: 'light',
        layout: {
            animation: 'fade',
            type: 'card'
        },
        scrollable: true,
        items: [
            {
                xtype: 'titlebar',
                docked: 'top',
                ui: 'light',
                scrollable: false,
                title: 'Bienvenue',
                layout: {
                    align: 'center',
                    type: 'hbox'
                }
            },
            {
                xtype: 'container',
                html: 'Mon titre'
            },
            {
                xtype: 'toolbar',
                docked: 'bottom',
                title: '',
                layout: {
                    align: 'center',
                    pack: 'center',
                    type: 'hbox'
                },
                items: [
                    {
                        xtype: 'button',
                        handler: function(button, event) {
                            console.log(button);
                            console.log(event);
                            button.setText("Accueil");
                        },
                        itemId: 'bthome',
                        ui: 'small',
                        iconAlign: 'bottom',
                        iconCls: 'home',
                        iconMask: true,
                        text: 'Home'
                    },
                    {
                        xtype: 'button',
                        itemId: 'btfavoris',
                        ui: 'small',
                        iconAlign: 'bottom',
                        iconCls: 'favorites',
                        iconMask: true,
                        text: 'Favoris'
                    }
                ]
            }
        ]
    }

});