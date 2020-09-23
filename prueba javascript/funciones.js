var App = App || {};
App.Funciones = {
    entero:function(id){
        return (/^([0-9])*$/.test(id))?true:false;
    },
    mayor:function(id){
        return (id>=2)?true:false;
    },
    entero:function(id){
        return ((id%2)==0)?true:false;
    },
    esEntero:function(id){
        var entero=Number.parseInt(id);
        return Number.isInteger(entero);
    },
}