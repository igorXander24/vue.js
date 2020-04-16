Vue.component('hijo', {
    template    : `
        <div class="py-5 bg-success">
            <h4>Componente Hijo: {{ numero }}</h4>   
            <h4>Nombre: {{ nombre }}</h4>
            <button class="btn btn-danger" @click="numero++">+</button>         
        </div>
    `,
    props       : ['numero'],
    data() {
        return {
            nombre: 'Igor'
        };
    },
    /**
     * Este evento se ejecuta cuando el DOM ya se ha dibujado
     * */
    mounted()     {
        //Emitir un evento?
        this.$emit('nombreHijo', this.nombre);
    }
});