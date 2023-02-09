<template>
    <div class="row booking mt-5 mb-5">
        <img class="herobooking" src="image/herobooking.png" alt="hero" />
        <div class="lokasi">
            <div class="icon">
                <img src="image/lokasi.png" alt="icon" />
            </div>
            <div class="info">
                <h1>Lapangan 1 Kakanta</h1>
                <h5>Jl. Antang</h5>
            </div>
        </div>
        <div class="isi jadwal mt-5 mb-5">
            <div class="bulan">
                <div class="daftar">
                    <button type="button" @click="prevMonth()">
                        <img src="image/kiri.png" alt="icon" />
                    </button>
                </div>
                <div class="daftar bulantahun">
                    <h3>{{ dataBulan[indexBulan].bulan }} {{ dataTahun }}</h3>
                </div>
                <div class="daftar">
                    <button type="button" @click="nextMonth()">
                        <img src="image/kanan.png" alt="icon" />
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
            <form action="/pesan">
                <h1>Pembayaran</h1>
                <div class="bayar">
                    <div class="tempat">
                        <h3>Lapangan 1 Kakanta</h3>
                        <h6>Futsal</h6>
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
                    <input type="hidden" :value="jadwalDipilih" />
                    <input type="hidden" :value="jamDipilih" />
                    <button v-show="
                        jadwalDipilih ==
                        tanggalDipilih +
                            ' ' +
                            dataBulan[indexBulan].bulan +
                            ' ' +
                            dataTahun
                    " type="submit" class="btn btn-success">
                        Lanjutkan Pembayaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import moment from "moment/min/moment-with-locales";
import "moment/locale/id";

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
            dataJam: [
                {
                    id: 1,
                    jam: "08:00 - 09:00",
                    harga: "120.000",
                    tanggal: "11 Februari 2023",
                    status: false,
                },
                {
                    id: 2,
                    jam: "09:00 - 10:00",
                    harga: "80.000",
                    tanggal: "11 Februari 2023",
                    status: false,
                },
                {
                    id: 3,
                    jam: "10:00 - 11:00",
                    harga: "70.000",
                    tanggal: "11 Februari 2023",
                    status: true,
                },
                {
                    id: 4,
                    jam: "11:00 - 12:00",
                    harga: "70.000",
                    tanggal: "11 Februari 2023",
                    status: true,
                },
                {
                    id: 5,
                    jam: "12:00 - 13:00",
                    harga: "70.000",
                    tanggal: "11 Februari 2023",
                    status: true,
                },
                {
                    id: 6,
                    jam: "13:00 - 14:00",
                    harga: "70.000",
                    tanggal: "11 Februari 2023",
                    status: false,
                },
                {
                    id: 7,
                    jam: "14:00 - 15:00",
                    harga: "90.000",
                    tanggal: "11 Februari 2023",
                    status: false,
                },
                {
                    id: 8,
                    jam: "15:00 - 16:00",
                    harga: "90.000",
                    tanggal: "11 Februari 2023",
                    status: true,
                },
                {
                    id: 9,
                    jam: "09:00 - 10:00",
                    harga: "70.000",
                    tanggal: "12 Februari 2023",
                    status: true,
                },
                {
                    id: 11,
                    jam: "10:00 - 11:00",
                    harga: "50.000",
                    tanggal: "12 Februari 2023",
                    status: false,
                },
                {
                    id: 12,
                    jam: "11:00 - 12:00",
                    harga: "50.000",
                    tanggal: "12 Februari 2023",
                    status: false,
                },
                {
                    id: 13,
                    jam: "12:00 - 13:00",
                    harga: "50.000",
                    tanggal: "12 Februari 2023",
                    status: false,
                },
                {
                    id: 14,
                    jam: "13:00 - 14:00",
                    harga: "50.000",
                    tanggal: "12 Februari 2023",
                    status: false,
                },
                {
                    id: 15,
                    jam: "14:00 - 15:00",
                    harga: "80.000",
                    tanggal: "12 Februari 2023",
                    status: true,
                },
                {
                    id: 16,
                    jam: "15:00 - 16:00",
                    harga: "80.000",
                    tanggal: "12 Februari 2023",
                    status: false,
                },
                {
                    id: 17,
                    jam: "15:00 - 16:00",
                    harga: "80.000",
                    tanggal: "2 Maret 2023",
                    status: false,
                },
                {
                    id: 18,
                    jam: "15:00 - 16:00",
                    harga: "80.000",
                    tanggal: "1 Maret 2023",
                    status: false,
                },
                {
                    id: 19,
                    jam: "15:00 - 16:00",
                    harga: "80.000",
                    tanggal: "5 Maret 2023",
                    status: false,
                },
            ],
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
};
</script>
