<template>
    <div>
        <template>
            <input type="file" class="form-control" @input="evaluateFile">
        </template>
    </div>
</template>

<script>
export default {
    props: {
        value: {
            default: null,
        },
    },
    data() {
        return {
            fileId: null
        }
    },
    methods: {
        evaluateFile(e) {
            if (e.target.files.length) {
                this.uploadFile(e.target.files[0])
            } else {
                this.deleteFile(e)
            }
        },
        uploadFile(file) {
            const form = new FormData
            form.append('file', file)
            axios.post('/ajax/storage/file', form)
                .then(res => {
                    this.fileId = res.data.id
                    this.$emit('input', this.fileId)
                })
        },
        deleteFile(e = null) {
            axios.delete('/ajax/storage/file', { data: { id: this.fileId } })
                .then(res => {
                    
                })
                .catch(err => {

                })
                .finally(() => {
                    this.fileId = null
                    this.$emit('input', this.fileId)
                })
        }
    },
    created() {
        this.fileId = this.value
    },
}
</script>