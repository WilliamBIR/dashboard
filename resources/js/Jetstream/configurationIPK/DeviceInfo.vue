<template>
    <div>
        <div>
            <h3 style="text-align:center; font-size:35px">Device Info</h3>
        </div>
        <div>
             <h4 style="text-align:center; font-size:30px">Añadir a la lista de puertos bloqueados</h4>
                <a @click.prevent="getBlockedPortList" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
                <p>blockedPort<input type="text" name="Properties" v-model="puerto.blockedPort"></p>
                <p>protocol<select v-model="puerto.protocol">
                    <option value=udp>UDP </option>
                    <option value=tcp>TCP </option>
                    </select></p>
                <p>server secure Connection  <select v-model="puerto.direction">
                    <option value=in>In </option>
                    <option value=out>Out </option>
                    <option value=all>All </option>
                    </select></p>
               <a @click.prevent="addBlockedPortList" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Guardar Cambios</a>         
                <p>Borrar Puertos</p>
                <p>blockedPort<input type="text" name="Properties" v-model="deletePort.blockedPort"></p>
                <p>protocol<select v-model="deletePort.protocol">
                    <option value=udp>UDP </option>
                    <option value=tcp>TCP </option>
                    </select></p>
                <p>server secure Connection  <select v-model="deletePort.direction">
                    <option value=in>In </option>
                    <option value=out>Out </option>
                    <option value=all>All </option>
                    </select></p>
                <a @click.prevent="deleteBlockedPortList" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Borrar Puerto</a>         
                <a @click.prevent="deleteTodos" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Borrar todos</a>         
            

            <h4 style="text-align:center; font-size:30px">Eddy? stoneInfo</h4>
            <a @click.prevent="getEddystoneInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <p>Enabled <select v-model="eddystoneInfo.enabled">
                <option value=false>false </option>
                <option value=true>true </option>
            </select></p>
            <p>FrameData  <input type="text" name="Properties" v-model="eddystoneInfo.frameData"></p>
            <a @click.prevent="setEddystoneInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
            
        
        </div>

        <div>
            <h4 style="text-align:center; font-size:30px">get Beacon Info</h4>
            <a @click.prevent="getiBeaconInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <p>Enabled <select v-model="iBeaconInfo.enabled">
                <option value=false>false </option>
                <option value=true>true </option>
            </select></p>
            <p>uuid  <input type="text" name="Properties" v-model="iBeaconInfo.uuid"></p>
            <p>major  <input type="number" min=0 max=65535 name="Properties" v-model="iBeaconInfo.major"></p>
            <p>minor  <input type="number" min=0 max=65535 name="Properties" v-model="iBeaconInfo.minor"></p>
            <a @click.prevent="setiBeaconInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
            
        
        </div>

        <div>
            <h4 style="text-align:center; font-size:30px">Hd Base T mode</h4>
            <a @click.prevent="getHDBaseTMode" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <p>hdBaseTmode <select v-model="hdBaseTMode">
                <option value=on>on </option>
                <option value=off>off </option>
            </select></p>
            <a @click.prevent="setHDBaseTMode" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         

        </div>
        <div>
            <h4 style="text-align:center; font-size:30px">getNetworkCheckupInfo</h4>
            <a @click.prevent="getNetworkCheckupInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <p>mode  <input type="text"  name="Properties" v-model="networkCheckupInfo.mode"></p>
            <p>url  <input type="text"  name="Properties" v-model="networkCheckupInfo.url"></p>
            <a @click.prevent="setNetworkCheckupInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
            

        </div>
        <div>
            <h4 style="text-align:center; font-size:30px">getNetworkInfo</h4>
            <a @click.prevent="getNetworkInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <a @click.prevent="setNetworkInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
                
        </div>
        <div>
            <h4 style="text-align:center; font-size:30px">getNetworkMacInfo</h4>
            <a @click.prevent="getNetworkMacInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
           
        </div> 
        <div>
            <h4 style="text-align:center; font-size:30px">getPlatformInfo</h4>
            <a @click.prevent="getPlatformInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
        </div> 
        <div>
            <h4 style="text-align:center; font-size:30px">getProxyInfo</h4>
            <a @click.prevent="getProxyInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <p>enabled <select v-model="proxyInfo.enabled">
                <option value=true>true </option>
                <option value=false>false </option>
            </select></p>
            <p> ipAdress <input type="text"  name="Properties" v-model="proxyInfo.ipAddress"></p>
            <p>port  <input type="number" min=0 max=65535  name="Properties" v-model="proxyInfo.port"></p>
            <p>username  <input type="text"  name="Properties" v-model="proxyInfo.username"></p>
            <p>password  <input type="text"  name="Properties" v-model="proxyInfo.password"></p>
            <a @click.prevent="setProxyInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
            
        </div>

        <div>
            <h4 style="text-align:center; font-size:30px">getSensorValues</h4>
            <a @click.prevent="getSensorValues" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <a @click.prevent="setSensorValues" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Cambiar</a>         
        
        </div>
        
        <div>
            <h4 style="text-align:center; font-size:30px">getSoftApClientInfo</h4>
            <a @click.prevent="getSoftApClientInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
        </div>
        
        <div>
            <h4 style="text-align:center; font-size:30px">getSoftApInfo</h4>
            <a @click.prevent="getSoftApInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
            <a @click.prevent="setSoftApInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
        
        
        </div>        
        
        <div>
            <h4 style="text-align:center; font-size:30px">getSystemUsageInfo</h4>
            <a @click.prevent="getSystemUsageInfo" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">Consultar</a>         
        </div>        
        
        
   

        <div>
            <h4 style="text-align:center; font-size:30px">WPS</h4>
            <a @click.prevent="startWps" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">start</a>         
            <a @click.prevent="stopWps" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-300 active:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ml-4">stop</a>         
        
        </div>   
        
        
    </div>
</template>


<script>
    import { defineComponent } from 'vue';
    export default defineComponent({
        components:{
        },
        props:["slug"],
        data(){
            return{
                puerto:{
                    blocketPort:null,
                    protocol:"udp",
                    direction:"in",
                },
                blockedPortList:[],

                deleteAll:false,
                deletePort:{
                    blocketPort:null,
                    protocol:"udp",
                    direction:"in",
                },
                eddystoneInfo:{
                    enabled:false,
                    frame:"url",
                    frameData:""
                },
                iBeaconInfo:{
                    enabled:false,
                    uuid:"",
                    major:0,
                    minor:0,
                },
                hdBaseTMode:"",
                networkCheckupInfo:{
                    mode:"",
                    url:""
                },
                networkInfo:{
                    bluetooth:{},
                    cellular:{},
                    wan:{},
                    wifi:{},
                    wifiDirect:{},
                    offlineMode:null,
                    subscribed:null,
                    isInternetConnectionAvailable:true,
                    wired:{}
                },
                networkMacInfo:{
                    wiredInfo:{},
                    wifiInfo:{}
                },
                platformInfo:{
                    harwareVersion:"",
                    manufacturer:"",
                    modelName:"",
                    sdkVersion:"",
                    serialNumber:"",
                    firmwareVersion:"",
                },
                proxyInfo:{
                    enabled:null,
                    ipAddress:"",
                    port:null,
                    userName:"",
                    password:""
                },
                sensorValues:{
                    backlight:null,
                    checkscreen:{},
                    fan:{},
                    humidity:null,
                    illuminance:null,
                    rotation:null,
                    temperature:null,  
                },
                softApClientInfo:{},
                softApInfo:{
                    enabled:null,
                    ssid:"",
                    securityKey:""
                },
                systemUsageInfo:{
                    cpus:[],
                    memory:{}
                },
                pin:""
            }
        },
        beforeMount(){
            console.log('Montando Device Info')        
        },
        mounted(){
            let dropdown = document.querySelectorAll(".dropdown-toggle");
                dropdown.forEach((el) => {
                    el.addEventListener("click", () => {
                        el.parentNode.classList.toggle("open");
                    });
            });
            this.$inertia.socket.on("successIPK", function (payload) {
                console.log(payload);
                if (payload.error) {
                    console.log(`Error en slugIPK: ${payload.uid}, error: ${JSON.stringify(payload.error.errorText)}`);
                } else {
                    console.log(`Exito en slugIPK: ${payload.uid}`);
                    if(payload.request.function == "getBlockedPortList"){ this.blockedPortList=payload.message;console.log(this.blockedPortList)};
                    if(payload.request.function == "getServerProperty"){ this.serverproperties=payload.message;
                        if(this.serverproperties.appType=="zip"){
                                this.serverproperties.appType="Configuration.AppType.ZIP"
                        }
                        if(this.serverproperties.appType=="ipk"){
                                this.serverproperties.appType="Configuration.AppType.IPK"
                        }
                        console.log(this.serverproperties)};
                    if(payload.request.function=="getEddystoneInfo"){this.eddystoneInfo=payload.message;console.log(this.eddystoneInfo)}
                    if(payload.request.function=="getiBeaconInfo"){this.iBeaconInfo=payload.message;console.log(this.iBeaconInfo)}
                    if(payload.request.function=="getHDBaseTMode"){this.hdBaseTMode=payload.message;console.log(this.hdBaseTMode)}
                    if(payload.request.function=="getNetworkCheckupInfo"){this.networkCheckupInfo=payload.message;console.log(this.networkCheckupInfo)}
                    if(payload.request.function=="getNetworkInfo"){this.networkInfo=payload.message;console.log(this.networkInfo)}
                    if(payload.request.function=="getNetworkMacInfo"){this.networkMacInfo=payload.message;console.log(this.networkMacInfo)}
                    if(payload.request.function=="getPlatformInfo"){this.platformInfo=payload.message;console.log(this.platformInfo)}
                    if(payload.request.function=="getProxyInfo"){this.proxyInfo=payload.message;console.log(this.proxyInfo)}
                    if(payload.request.function=="getSensorValues"){this.sensorValues=payload.message;console.log(this.sensorValues)}
                    if(payload.request.function=="getSoftApClientInfo"){this.softApClientInfo=payload.message;console.log(this.softApClientInfo)}
                    if(payload.request.function=="getSoftApInfo"){this.softApInfo=payload.message;console.log(this.softApInfo)}
                    if(payload.request.function=="getSystemUsageInfo"){this.systemUsageInfo=payload.message;console.log(this.systemUsageInfo)}
                    if(payload.request.function=="startWps"){this.pin=payload.message;console.log(this.pin)}
                    
                    
                    
                        
                }  
            }.bind((this)));
        },
        methods:{
            //Los siguientes metodos son descritos en la parte de Device Info
            //EddystoneFrame??? Paso
            /********** De aqui en adelante, falta probar todo con un modulo real, solo se
            iran agregando de a poco las cosas  Gaaaaooo*/
            addBlockedPortList(){
                var comando=`{
                    "func":"addBlockedPortList",
                    "options":{
                        blockedPortList:[
                            {
                                blockedPort:${this.puerto.blocketPort},
                                protocol:"${this.puerto.protocol}",
                                direction:"${this.puerto.direction}",
                            }
                        ]
                    }
                }`;
                console.log(comando)
                this.$inertia.socket.emit("mensaje", {uid: this.slug,message: comando});
            },
            getBlockedPortList(){
                this.$inertia.socket.emit("mensaje", {uid: this.slug,message: `{ "func": "getBlockedPortList" }`});
            },

            deleteBlockedPortList(){
                var comando=`{
                    "func":"deleteBlockedPortList",
                    "options":{
                        deleteAll:false,
                        blockedPortList : [
                            {
                                blockedPort : ${this.deletePort.blockedPort},
                                protocol : ${this.deletePort.protocol},
                                direction : ${this.deletePort.direction}
                            }
                            ]
                    }
                }`;
                console.log(comando)
                this.$inertia.socket.emit("mensaje", {uid: this.slug,message: comando});    
            },
            deleteTodos(){
                 var comando=`{
                    "func":"deleteBlockedPortList",
                    "options":{
                        deleteAll:true,
                        blockedPortList : [
                        {
                            blockedPort : 1900,
                            protocol : "tcp",
                            direction : "in"
                        }]
                            }
                }`;
                console.log(comando)
                this.$inertia.socket.emit("mensaje", {uid: this.slug,message: comando}); 
            },
            getEddystoneInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getEddystoneInfo" }`})
            },

            getiBeaconInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getiBeaconInfo" }`})
            },
            getHDBaseTMode(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getHDBaseTMode" }`})
            },
            getNetworkCheckupInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func": "getNetworkCheckupInfo" }`})
            },
            getNetworkInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func": "getNetworkInfo" }`})
            },
            getNetworkMacInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getNetworkMacInfo" }`})
            },
            getPlatformInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getPlatformInfo" }`})
            },
            getProxyInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message: `{"func":"getProxyInfo" }`})
            },
            getSensorValues(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func": "getSensorValues" }`})
            },
            getSoftApClientInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{"func":"getSoftApClientInfo" }`})
            },
            getSoftApInfo(){
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:`{ "func": "getSoftApInfo" }`})
            },
            getSystemUsageInfo(){
                var comando=`{
                    "func": "getSystemUsageInfo",
                    "options":{
                        cpus:true,
                        memory:true
                    }
                }`;
                this.$inertia.socket.emit("mensaje",{uid: this.slug, message:comando})
            },


            setEddystoneInfo(){
                var comando=`{
                    "func":"setEddystoneInfo",
                    "options":{
                        enabled:${this.eddystoneInfo.enabled},
                        frame:DeviceInfo.EddystoneFrame.URL,
                        frameData:"${this.eddystoneInfo.frameData}"
                    }
                }`
                this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
                setTimeout(()=>{this.getEddystoneInfo()},500);
            },

            setHDBaseTMode(){
                var comando=`{
                    "func":"setHDBaseTMode",
                    "options":{
                        HDBaseTMode:"${this.hdBaseTMode}"
                    }
                }`;
                this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
                setTimeout(()=>{this.getHDBaseTMode()},500);
            },
            setiBeaconInfo(){
                var comando=`{
                    "func":"setiBeaconInfo",
                    "options":{
                        enabled:${this.iBeaconInfo.enabled},
                        uuid:"${this.iBeaconInfo.uuid}",
                        major:${this.iBeaconInfo.major},
                        minor:${this.iBeaconInfo.minor}
                    }
                }`;
                this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
                setTimeout(()=>{this.getiBeaconInfo()},500);
            },
            setNetworkCheckupInfo(){
                var comando=`{
                    "func":"setNetworkCheckupInfo",
                    "options":{
                        mode:"${this.networkCheckupInfo.mode}",
                        url:"${this.networkCheckupInfo.url}"
                    }
                }`;
                this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
                setTimeout(()=>{this.getNetworkCheckupInfo()},500);
            },

        //De ejemplo solamente
        setNetworkInfo(){
                var comando=`{
                    "func":"setNetworkInfo",
                    "options":{
                        wired:{
                            enabled:${this.networkInfo.wired.enabled},
                            method:"${this.networkInfo.wired.method}",
                            ipAddress:"${this.networkInfo.wired.ipAddress}",
                            netmask:"${this.networkInfo.wired.netmask}",
                            gateway:"${this.networkInfo.wired.gateway}",
                            dns1:"${this.networkInfo.wired.dns1}",
                            dns2:"${this.networkInfo.wired.dns2}",
                        },
                        wifi:{
                            enabled:false,
                            method:"${this.networkInfo.wifi.method}",
                            ipAddress:"${this.networkInfo.wifi.ipAddress}",
                            netmask:"${this.networkInfo.wifi.netmask}",
                            gateway:"${this.networkInfo.wifi.gateway}",
                            dns1:"${this.networkInfo.wifi.dns1}",
                            dns2:"${this.networkInfo.wifi.dns2}",
                        }
                    }
                }`;
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
            setTimeout(()=>{this.getNetworkInfo()},500);
        },
        setProxyInfo(){
            var comando=`{
                "func":"setProxyInfo",
                "options":{
                    enabled:${this.proxyInfo.enabled},
                    ipAddress:"${this.proxyInfo.ipAddress}",
                    password:"${this.proxyInfo.password}",
                    port:${this.proxyInfo.port},
                    userName:"${this.proxyInfo.userName}",
                }
            }`;
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
            setTimeout(()=>{this.getProxyInfo()},500);
        },
        setSensorValues(){
            var comando=`{
                "func":"setSensorValues",
                "options":{
                    backlight:50
                }
            }`;
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
            setTimeout(()=>{this.getSensorValues()},500);
        },
        setSoftApInfo(){
            var comando=`{
                "func":"setSoftApInfo",
                "options":{
                    enabled:true
                    ssid:"LG SIGNAGE"
                    securityKey:"404571"
                }
            }`;
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
            setTimeout(()=>{this.getSoftApInfo()},500);
        },
        startWps(){
            //PBC O PIN,
            /**
             * Si es pin,
             * Te va a regresar el pin
             * Si es PBC, no regresa nada
             */
            var comando=`{
                "func":"startWps",
                "options":{
                    method:"PIN"
                }
            }`;
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:comando})
        },
        stopWps(){
            this.$inertia.socket.emit("mensaje",{uid:this.slug, message:`{ "func":"stopWps" }`})
        }


        }
    })
</script>
