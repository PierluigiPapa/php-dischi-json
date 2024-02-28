const { createApp } = Vue;

  createApp({
    data() {
      return {
        // Creo un array dove pushare i dati del file.json
        dischi: [],
        discoCorrente: null,
      }
    },
    // Creo una chiamata alle API per leggere i dati e passarli chiamata all'array dischi
    methods: {
      getDischi() {
        axios.get('server.php').then(response => {
            this.dischi = response.data;
        });
      },
      showDisco(index) {
        axios.get('server.php', {params: { index }}).then(response => {
            this.discoCorrente = response.data;
        });
      }
    },
    // Creo l'area dischi per generarlo nella homepage
    created() {
      this.getDischi();
    }
  }).mount('#app');