<template>
    <div class="row booking mt-5 mb-5">
        <form action="/pesan">
            <img
                class="herobooking"
                :src="'/storage/' + dataLapangan.foto"
                alt="hero"
            />
            <div class="lokasi">
                <div class="icon">
                    <img src="/image/lokasi.png" alt="icon" />
                </div>
                <div class="info">
                    <h1>
                        {{ dataLapangan.nama_lapangan }}
                        {{ dataUser.namatempat }}
                    </h1>
                    <h5>{{ dataUser.alamat }}</h5>
                </div>
            </div>
            <div class="isi jadwal mt-5 mb-5">
                <div class="bulan">
                    <div class="daftar">
                        <button type="button" @click="prevMonth()">
                            <img src="/image/kiri.png" alt="icon" />
                        </button>
                    </div>
                    <div class="daftar bulantahun">
                        <h3>
                            {{ dataBulan[indexBulan].bulan }} {{ dataTahun }}
                        </h3>
                    </div>
                    <div class="daftar">
                        <button type="button" @click="nextMonth()">
                            <img src="/image/kanan.png" alt="icon" />
                        </button>
                    </div>
                </div>
                <div
                    class="tanggal"
                    data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'
                >
                    <button
                        v-for="item in dataTanggal"
                        :key="item.id"
                        v-show="item.bulan == dataBulan[indexBulan].bulan"
                        @click="makeActive(item)"
                        class="hari"
                        type="button"
                    >
                        <h5 v-bind:class="{ activehari: item.isActive }">
                            {{ item.hari }}
                        </h5>
                        <div
                            class="nomor"
                            v-bind:class="{ activetanggal: item.isActive }"
                        >
                            <h4>{{ item.tanggal }}</h4>
                        </div>
                    </button>
                    <!-- <button type="button" class="hari">
                        <h5 class="activehari">Sab</h5>
                        <div class="nomor activetanggal">
                            <h4>12</h4>
                        </div>
                    </button> -->
                </div>
                <hr />
                <div class="jam">
                    <div
                        class="status"
                        v-for="item in dataJam"
                        :key="item.id"
                        v-show="
                            item.tanggal ==
                            tanggalDipilih +
                                ' ' +
                                dataBulan[indexBulan].bulan +
                                ' ' +
                                dataTahun
                        "
                        v-bind:class="{ statusbooked: item.status }"
                    >
                        <label
                            v-bind:class="{ jambooked: item.status }"
                            :for="'jadwal' + item.id"
                            >{{ item.jam }}</label
                        >
                        <div
                            class="jumlah"
                            v-bind:class="{ jumlahbooked: item.status }"
                        >
                            <h4 v-if="item.status">Booked</h4>
                            <h4 v-else>Rp. {{ item.harga }}</h4>
                            <div v-if="item.status"></div>
                            <input
                                v-else
                                type="radio"
                                :id="'jadwal' + item.id"
                                name="jadwal"
                                :value="item.id"
                                v-model="selectedRadio"
                            />
                        </div>
                    </div>
                    <!-- <div class="status statusbooked">
                        <label class="jambooked">19:00 - 20:00</label>
                        <div class="jumlah jumlahbooked">
                            <h4>Booked</h4>
                            <input type="radio" name="jadwal">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="isi mb-lg-5 mb-2">
                <h1>Pembayaran</h1>
                <div class="bayar">
                    <div class="tempat">
                        <h3>
                            {{ dataLapangan.nama_lapangan }}
                            {{ dataUser.namatempat }}
                        </h3>
                        <h6>{{ dataOlahraga.jenis }}</h6>
                        <h5>
                            {{ jadwalDipilih }}
                            <i class="bi bi-circle-fill ms-1 me-1"></i>
                            {{ jamDipilih }}
                        </h5>
                    </div>
                    <div class="harga">
                        <h2>Rp. {{ hargaDipilih }}</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <!-- <input type="hidden" :value="jadwalDipilih" />
                    <input type="hidden" :value="jamDipilih" /> -->
                    <button
                        v-show="
                            jadwalDipilih ==
                            tanggalDipilih +
                                ' ' +
                                dataBulan[indexBulan].bulan +
                                ' ' +
                                dataTahun
                        "
                        type="submit"
                        class="btn btn-success"
                    >
                        Lanjutkan Pembayaran
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import moment from "moment/min/moment-with-locales";
import "moment/locale/id";
import axios from "axios";

moment.locale("id");

let dataTanggal = [];
for (let i = 0; i < 30; i++) {
    let tanggal = moment().add(i, "days").format("D");
    let hari = moment().add(i, "days").format("ddd");
    let bulan = moment().add(i, "days").format("MMMM");
    let tahun = moment().add(i, "days").format("YYYY");

    dataTanggal.push({
        id: i + 1,
        tanggal: tanggal,
        hari: hari,
        bulan: bulan,
        tahun: tahun,
        isActive: false,
    });
}

let dataBulan = [];
for (let i = 0; i < 2; i++) {
    let bulan = moment().add(i, "month").format("MMMM");

    dataBulan.push({
        bulan: bulan,
    });
}

let dataTahun = moment().format("YYYY");

console.log(dataTanggal);
console.log(dataBulan);
console.log(dataTahun);

export default {
    components: {
        Subject: "Booking",
    },
    data() {
        return {
            dataTanggal: dataTanggal,
            tanggalDipilih: "",
            selectedRadio: "",
            dataBulan: dataBulan,
            dataTahun: dataTahun,
            indexBulan: 0,
            maxBulan: 1,
            minBulan: 0,
            dataUser: [],
            dataJam: [],
            dataOlahraga: [],
            dataLapangan: [],
        };
    },
    methods: {
        nextMonth() {
            if (this.indexBulan < this.maxBulan) {
                this.indexBulan++;
            }
        },
        prevMonth() {
            if (this.indexBulan > this.minBulan) {
                this.indexBulan--;
            }
        },
        makeActive(item) {
            this.dataTanggal.forEach((i) => {
                i.isActive = false;
            });
            item.isActive = true;
            this.tanggalDipilih = item.tanggal;
        },
    },
    computed: {
        jadwalDipilih() {
            let jadwal = "";
            this.dataJam.forEach((item) => {
                if (item.id === this.selectedRadio) {
                    jadwal = item.tanggal;
                }
            });
            return jadwal;
        },
        jamDipilih() {
            let jam = "";
            this.dataJam.forEach((item) => {
                if (item.id === this.selectedRadio) {
                    jam = item.jam;
                }
            });
            return jam;
        },
        hargaDipilih() {
            let harga = 0;
            this.dataJam.forEach((item) => {
                if (item.id === this.selectedRadio) {
                    harga = item.harga;
                }
            });
            return harga;
        },
    },
    beforeCreate() {
        const id = document.getElementById("idLapangan").value;

        axios
            .get("/api/datajadwal/" + id)
            .then((response) => {
                this.dataLapangan = response.data.dataLapangan;
                this.dataJam = response.data.dataJadwal;
                this.dataUser = response.data.dataUser;
                this.dataOlahraga = response.data.dataOlahraga;
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>
