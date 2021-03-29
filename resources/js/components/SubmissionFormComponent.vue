<template>
    <form class="my-4" @submit.prevent="submit">
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" v-if="form.state.success == true">
                    Data berhasil disubmit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" v-if="form.state.success == false">
                    Data gagal disubmit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 border p-3">
                <div class="form-group">
                    <label>Jenis Kegiatan</label>
                    <input type="text" class="form-control" v-model="form.data['activity_type']">
                </div>
                <div class="form-group">
                    <label>Catatan</label>
                    <input type="text" class="form-control" v-model="form.data['note']">
                </div>
                <div class="form-group">
                    <label>Disposisi</label>
                    <input type="text" class="form-control" v-model="form.data['disposition']">
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <template v-for="subFormBreakdown in subForm.breakdowns">
                                <template v-if="subFormBreakdown.children">
                                    <tr
                                        :key="subFormBreakdown.id"
                                        :class="{
                                            'table-active': subForm.active == subFormBreakdown.id
                                        }"
                                    >
                                        <td>{{ subFormBreakdown.number }}</td>
                                        <td colspan="2">{{ subFormBreakdown.title }}</td>
                                        <td></td>
                                    </tr>
                                    <tr
                                        v-for="subFormBreakdownChild in subFormBreakdown.children"
                                        :key="subFormBreakdownChild.id"
                                        @click="toggleSubForm(subFormBreakdownChild.id)"
                                        :class="{
                                            'table-active': subForm.active == subFormBreakdownChild.id
                                        }"
                                    >
                                        <td></td>
                                        <td style="width: 5%;">{{ subFormBreakdownChild.number }}</td>
                                        <td>{{ subFormBreakdownChild.title }}</td>
                                        <td></td>
                                    </tr>
                                </template>
                                <tr
                                    @click="toggleSubForm(subFormBreakdown.id)"
                                    :key="subFormBreakdown.id"
                                    v-else
                                    :class="{
                                        'table-active': subForm.active == subFormBreakdown.id
                                    }"
                                >
                                    <td>{{ subFormBreakdown.number }}</td>
                                    <td colspan="2">{{ subFormBreakdown.title }}</td>
                                    <td></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
            <div class="col-6 border p-3">
                <!-- Application Letter Form -->
                <template v-if="subForm.active == '1'">
                    <div class="form-group">
                        <label>Nomor Surat Permohonan</label>
                        <input type="text" class="form-control" v-model="form.data['application_letter']['number']">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" v-model="form.data['application_letter']['date']">
                    </div>
                    <div class="form-group">
                        <label>Surat Permohonan</label>
                        <file-picker-component v-model="form.data['application_letter']['file_id']" />
                    </div>
                </template>
                <!-- Proposal Letter Form -->
                <template v-else-if="subForm.active == '2'">
                    <div class="form-group">
                        <label>Afiliasi</label>
                        <input type="text" class="form-control" v-model="form.data['proposal_letter']['affiliation']">
                    </div>
                    <div class="form-group">
                        <label>Proposal</label>
                        <file-picker-component v-model="form.data['proposal_letter']['file_id']" />
                    </div>
                </template>
                <!-- Ratification Form -->
                <template v-else-if="subForm.active == '3a'">
                    <div class="form-group">
                        <label>Surat Pengesahan / Penetapan SKPD Kab / Kota / Camat</label>
                        <file-picker-component v-model="form.data['ratification']['file_id']" />
                    </div>
                </template>
                <!-- Domicile Form -->
                <template v-else-if="subForm.active == '3b'">
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control" v-model="form.data['domicile']['address']">
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" v-model="form.data['domicile']['province_id']"></select>
                    </div>
                    <div class="form-group">
                        <label>Kab / Kota</label>
                        <select class="form-control" v-model="form.data['domicile']['city_id']"></select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" v-model="form.data['domicile']['district_id']"></select>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <select class="form-control" v-model="form.data['domicile']['subdistrict_id']"></select>
                    </div>
                    <div class="form-group">
                        <label>Surat Keterangan Domisili (Desa)</label>
                        <file-picker-component v-model="form.data['domicile']['file_id']" />
                    </div>
                </template>
                <!-- Pokmas Form -->
                <template v-else-if="subForm.active == '3c'">
                    <div class="form-group">
                        <label>Nama Pokmas</label>
                        <input type="text" class="form-control" v-model="form.data['pokmas']['name']">
                    </div>
                    <div class="form-group">
                        <label>Mempunyai kepengurusan yang jelas</label>
                        <file-picker-component v-model="form.data['pokmas']['file_id']" />
                    </div>
                </template>
                <!-- Administrative Residence Form -->
                <template v-else-if="subForm.active == '3d'">
                    <div class="form-group">
                        <label>Berpendudukan di wilayah administrasi</label>
                        <file-picker-component v-model="form.data['administrative_residence']['file_id']" />
                    </div>
                </template>
                <!-- Aid Form -->
                <template v-else-if="subForm.active == '4a'">
                    <div class="form-group">
                        <label>Surat Pernyataan Tidak Menerima Bantuan dari APBD Provinsi Jawa Timur 1 (satu) Tahun Anggaran sebelumnya</label>
                        <file-picker-component v-model="form.data['aid']['file_id']" />
                    </div>
                </template>
                <!-- Grant Form -->
                <template v-else-if="subForm.active == '4b'">
                    <div class="form-group">
                        <label>Surat Pernyataan Tidak Menerima Bantuan Hibah dari APBD Provinsi Jawa Timur secara terus menerus, kecuali ditentukan peraturan perundang-undangan</label>
                        <file-picker-component v-model="form.data['grant']['file_id']" />
                    </div>
                </template>
                <!-- Land Readiness -->
                <template v-else-if="subForm.active == '5'">
                    <div class="form-group">
                        <label>Surat Pernyataan Kesiapan Lahan tidak bersengketa diketahui oleh Pejabat setempat (Kades/Lurah)</label>
                        <file-picker-component v-model="form.data['land_readiness']['file_id']" />
                    </div>
                </template>
                <!-- Chairman Form -->
                <template v-else-if="subForm.active == '6a'">
                    <div class="form-group">
                        <label>KTP Ketua</label>
                        <file-picker-component v-model="form.data['chairman']['file_id']" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" v-model="form.data['chairman']['name']">
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" v-model="form.data['chairman']['phone']">
                    </div>
                </template>
                <!-- Secretary Form -->
                <template v-else-if="subForm.active == '6b'">
                    <div class="form-group">
                        <label>KTP Sekretaris</label>
                        <file-picker-component v-model="form.data['secretary']['file_id']" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" v-model="form.data['secretary']['name']">
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" v-model="form.data['secretary']['phone']">
                    </div>
                </template>
                <!-- Treasurer Form -->
                <template v-else-if="subForm.active == '6c'">
                    <div class="form-group">
                        <label>KTP Bendahara</label>
                        <file-picker-component v-model="form.data['treasurer']['file_id']" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" v-model="form.data['treasurer']['name']">
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" v-model="form.data['treasurer']['phone']">
                    </div>
                </template>
                <!-- Member Form -->
                <template v-else-if="subForm.active == '6d'">
                    <div class="form-group">
                        <label>KTP Anggota</label>
                        <file-picker-component v-model="form.data['member']['file_id']" />
                    </div>
                </template>
                <!-- Site Plan Form -->
                <template v-else-if="subForm.active == '7'">
                    <div class="form-group">
                        <label>Denah Lokasi Pekerjaan</label>
                        <file-picker-component v-model="form.data['location']['file_id']" />
                    </div>
                </template>
                <!-- Activity Photo Form -->
                <template v-else-if="subForm.active == '8'">
                    <div class="form-group">
                        <label>Foto Lokasi Kegiatan (Foto 0%)</label>
                        <file-picker-component v-model="form.data['activity']['file_id']" />
                    </div>
                </template>
                <!-- Budget Plan -->
                <template v-else-if="subForm.active == '9a'">
                    <div class="form-group">
                        <label>Nilai RAB</label>
                        <input type="number" class="form-control" v-model="form.data['budget_plan']['value']">
                    </div>
                    <div class="form-group">
                        <label>Upload RAB</label>
                        <file-picker-component v-model="form.data['budget_plan']['file_id']" />
                    </div>
                </template>
                <!-- Bank Account -->
                <template v-else-if="subForm.active == '10'">
                    <div class="form-group">
                        <label>Bank</label>
                        <select class="form-control" v-model="form.data['bank_account']['bank_id']"></select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" class="form-control" v-model="form.data['bank_account']['number']">
                    </div>
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" class="form-control" v-model="form.data['bank_account']['name']">
                    </div>
                </template>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            subForm: {
                active: '1',
                breakdowns: [
                    {
                        id: '1',
                        number: '1.',
                        title: 'Surat Permohonan'
                    },
                    {
                        id: '2',
                        number: '2.',
                        title: 'Proposal'
                    },
                    {
                        id: '3',
                        number: '3.',
                        title: 'Pengesahan Kelembagaan POKMAS',
                        children: [
                            {
                                id: '3a',
                                number: 'a.',
                                title: 'Surat Pengesahan / Penetapan SKPD Kab / Kota / Camat'
                            },
                            {
                                id: '3b',
                                number: 'b.',
                                title: 'Surat Keterangan Domisili (Desa)'
                            },
                            {
                                id: '3c',
                                number: 'c.',
                                title: 'Mempunyai kepengurusan yang jelas'
                            },
                            {
                                id: '3d',
                                number: 'd.',
                                title: 'Berpendudukan di wilayah administrasi'
                            },
                        ]
                    },
                    {
                        id: '4',
                        number: '4.',
                        title: 'Surat Pernyataan bermaterai Rp. 6000',
                        children: [
                            {
                                'id': '4a',
                                'number': 'a.',
                                'title': 'Tidak Menerima Bantuan dari APBD Provinsi Jawa Timur 1 (satu) Tahun Anggaran sebelumnya'
                            },
                            {
                                'id': '4b',
                                'number': 'b.',
                                'title': 'Tidak Menerima Bantuan Hibah dari APBD Provinsi Jawa Timur secara terus menerus, kecuali ditentukan peraturan perundang-undangan'
                            },
                        ]
                    },
                    {
                        id: '5',
                        number: '5.',
                        title: 'Surat Pernyataan Kesiapan Lahan tidak bersengketa diketahui oleh Pejabat setempat (Kades/Lurah)',
                    },
                    {
                        id: '6',
                        number: '6.',
                        title: 'Fotocopy KTP Struktur Kepengurusan Pokmas',
                        children: [
                            {
                                id: '6a',
                                number: 'a.',
                                title: 'Ketua',
                            },
                            {
                                id: '6b',
                                number: 'b.',
                                title: 'Sekretaris',
                            },
                            {
                                id: '6c',
                                number: 'c.',
                                title: 'Bendahara',
                            },
                            {
                                id: '6d',
                                number: 'd.',
                                title: 'Anggota',
                            },
                        ]
                    },
                    {
                        id: '7',
                        number: '7.',
                        title: 'Denah Lokasi Pekerjaan',
                    },
                    {
                        id: '8',
                        number: '8.',
                        title: 'Foto Lokasi Kegiatan (Foto 0%)',
                    },
                    {
                        id: '9',
                        number: '9.',
                        title: 'Rencana Anggaran Biaya (RAB) yang di tanda tangani ketua Pokmas dan Kepala Desa',
                        children: [
                            {
                                id: '9a',
                                number: 'a.',
                                title: 'Nilai RAB',
                            }
                        ]
                    },
                    {
                        id: '10',
                        number: '10.',
                        title: 'Nomor Rekening',
                    },
                ]
            },
            form: {
                data: {
                    'application_letter': {
                        'number': '',
                        'date': '',
                        'file_id': null,
                    },
                    'proposal_letter': {
                        'affiliation': '',
                        'file_id': null,
                    },
                    'ratification': {
                        'file_id': null,
                    },
                    'domicile': {
                        'address': '',
                        'province_id': null,
                        'city_id': null,
                        'district_id': null,
                        'subdistrict_id': null,
                        'file_id': null,
                    },
                    'pokmas': {
                        'name': '',
                        'file_id': null,
                    },
                    'administrative_residence': {
                        'file_id': null,
                    },
                    'aid': {
                        'file_id': null,
                    },
                    'grant': {
                        'file_id': null,
                    },
                    'land_readiness': {
                        'file_id': null,
                    },
                    'chairman': {
                        'file_id': null,
                        'name': '',
                        'phone': '',
                    },
                    'secretary': {
                        'file_id': null,
                        'name': '',
                        'phone': '',
                    },
                    'treasurer': {
                        'file_id': null,
                        'name': '',
                        'phone': '',
                    },
                    'member': {
                        'file_id': null,
                    },
                    'location': {
                        'file_id': null,
                    },
                    'activity': {
                        'file_id': null,
                    },
                    'budget_plan': {
                        'file_id': null,
                        'value': 0,
                    },
                    'bank_account': {
                        'bank_id': null,
                        'number': '',
                        'name': '',
                    }
                },
                state: {
                    success: null,
                }
            }
        }
    },
    methods: {
        toggleSubForm(id) {
            this.subForm.active = id
        },
        submit() {
            this.form.state.success = null
            axios.post('/ajax/jasmas/people_aspiration', this.form.data)
                .then(res => {
                    this.form.state.success = true
                    this.form.data = {
                        'application_letter': {
                            'number': '',
                            'date': '',
                            'file_id': null,
                        },
                        'proposal_letter': {
                            'affiliation': '',
                            'file_id': null,
                        },
                        'ratification': {
                            'file_id': null,
                        },
                        'domicile': {
                            'address': '',
                            'province_id': null,
                            'city_id': null,
                            'district_id': null,
                            'subdistrict_id': null,
                            'file_id': null,
                        },
                        'pokmas': {
                            'name': '',
                            'file_id': null,
                        },
                        'administrative_residence': {
                            'file_id': null,
                        },
                        'aid': {
                            'file_id': null,
                        },
                        'grant': {
                            'file_id': null,
                        },
                        'land_readiness': {
                            'file_id': null,
                        },
                        'chairman': {
                            'file_id': null,
                            'name': '',
                            'phone': '',
                        },
                        'secretary': {
                            'file_id': null,
                            'name': '',
                            'phone': '',
                        },
                        'treasurer': {
                            'file_id': null,
                            'name': '',
                            'phone': '',
                        },
                        'member': {
                            'file_id': null,
                        },
                        'location': {
                            'file_id': null,
                        },
                        'activity': {
                            'file_id': null,
                        },
                        'budget_plan': {
                            'file_id': null,
                            'value': 0,
                        },
                        'bank_account': {
                            'bank_id': null,
                            'number': '',
                            'name': '',
                        }
                    }
                })
                .catch(err => {
                    this.form.state.success = false
                })
        }
    }
}
</script>