<template>
  <div class="flex flex-wrap w-full h-30 bg-gray-200 rounded shadow-xl">
    <div class="flex flex-wrap w-full h-16 p-2 bg-white shadow-xl ">
      <label class="flex w-full text-black text-lg">
        Actualizar Gastos/Ingresos
      </label>
      <input
        id="inputMonto"
        v-model="inputMonto"
        class="bg-red-500 p-2 w-full h-5 block text-gray-900 text-sm font-bold mb-1 rounded"
        type="text"
        name="actualizarMontos"
      >
    </div>
    <div class="flex justify-around w-full h-20 pl-1 bg-white rounded shadow-xl">
      <div class="flex flex-wrap py-2">
        <label class="flex w-full text-black text-lg">
          Tipo
        </label>
        <input
          id="tipoMonto"
          v-model="tipoMonto"
          class="bg-red-500 p-2 w-full h-5 block text-gray-900 text-sm font-bold m-1 rounded"
          type="text"
          name="actualizarTipos"
        >
      </div>
      <div class="flex justify-around pt-8">
        <DatePicker
          v-model="fechaTransaccion"
          :popover="{ placement: 'bottom', visibility: 'click' }"
        >
          <button class="p-1 bg-blue-600 hover:bg-blue-700 text-white rounded focus:outline-none">
            <VueHicons
              name="calendar"
              stroke-color="#FFF"
              :width-icon="6"
            />
          </button>
        </DatePicker>

        <button
          class="bg-green-300 text-blue-700 h-8 hover:bg-green-500 font-bold px-3 py-1 mx-2 rounded-full focus:outline-none focus:shadow-outline"
          type="button"
          @click="ingresarDinero()"
        >
          Ingreso
        </button>
        <button
          class="bg-red-300 text-blue-700 h-8 hover:bg-red-500  font-bold px-3 py-1 mx-2 rounded-full focus:outline-none focus:shadow-outline"
          type="button"
          @click="egresoDinero()"
        >
          Egreso
        </button>
      </div>
    </div>
  </div>
</template>

<script>

import DatePicker from "v-calendar/lib/components/date-picker.umd";
import moment from "moment";
import VueHicons from "vue-hicons";

export default {
  name: "InfoInput",
  components: {
    DatePicker,
    VueHicons
  },
  data() {
    return {
      tipoMonto: "",
      inputMonto: "",
      fechaTransaccion: "",
      Test:""
    };
  },
  computed: {

  },
  watch: {
    fechaTransaccion(newValue, oldValue) {
      return moment(newValue).toISOString();
    }
  },
  methods: {
    ingresarDinero() {
      axios
        .post("/ingresoDinero", {
          Monto: this.inputMonto,
          Tipo: this.tipoMonto,
          Fecha: this.fechaTransaccion
        })
        .then(resolve => {
          this.$emit("actualizarListaDeIngresos");
        });
    },

    egresoDinero() {
      axios
        .post("/egresoDinero", {
          Monto: this.inputMonto,
          Tipo: this.tipoMonto,
          Fecha: this.fechaTransaccion
        })
        .then(resolve => {
          this.$emit("actualizarListaDeIngresos");
        });
    },
  }

};
</script>

<style >

</style>
