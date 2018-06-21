<div class="modal" :class="{'is-active' : modalGeneral}">
      <div class="modal-background"></div>
      <div class="modal-content">
           <div class="content">
                <h3 class="text-center">@{{titleModal}}</h3>
                <div class="field">
                     <label class="label">@{{messageModal}}</label>
                     <p class="control" v-if="modalDeparture">
                     <input class="input" placeholder="Departamento" v-model="titleDeparture" :readonly="modalDeparture==3">
                    </p>
                    <div v-show="errorTitleDeparture" class="columns text-center">
                        <div class="column text-center text-danger">
                            El nombre del Departamento no puede estar vacio
                        </div>
                    </div>
                    <p class="control" v-if="modalPosition">
                        <input class="input" placeholder="Cargo" v-model="titlePosition" :disabled="modalPosition==3">
                        <select class="select" :disabled="modalPosition==3" v-model="idDeparturePosition">
                            <option v-for="departure in  departures" :value="departure.id">@{{ departure.title }}</option>
                        </select>
                    </p>
                    <div v-show="errorTitlePosition" class="columns text-center">
                        <div class="column text-center text-danger">
                            El nombre del Cargo no puede estar vacío
                        </div>
                    </div>
                    <div class="columns button-content">
                        <div class="column">
                            <a class="button is-success" @click="createDeparture()" v-if="modalDeparture==1">Aceptar</a>
                            <a class="button is-success" @click="updateDeparture()" v-if="modalDeparture==2">Aceptar</a>
                            <a class="button is-success" @click="destroyDeparture()" v-if="modalDeparture==3">Aceptar</a>
                            <a class="button is-success" @click="createPosition()" v-if="modalPosition==1">Aceptar</a>
                            <a class="button is-success" @click="updatePosition()" v-if="modalPosition==2">Aceptar</a>
                            <a class="button is-success" @click="destroyPosition()" v-if="modalPosition==3">Aceptar</a>
                        </div>

                        <div class="column">
                            <a class="button is-danger" @click="closeModal()">Cancelar</a>
                        </div>
                    </div>
              </div>
         </div>
         <button class="modal-close" @click="closeModal()"></button>
     </div>
</div>