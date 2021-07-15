<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <app-layout>
        <div class="mt-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl">
            <h1 class="mb-8 font-bold text-3xl">
                <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('children.index')">Children
                </inertia-link>
                <span class="text-indigo-400 font-medium">/</span> Create
            </h1>
            <div class="bg-white rounded-md shadow overflow-hidden max-w-7xl">
                <form @submit.prevent="store">
                    <div class="p-8 -mr-6 mb-2 grid grid-cols-3 gap-4">

                        <input-text v-model="form.name"
                                    :error="form.errors.name"
                                    label="Name"/>

                    </div>
                    <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center">
                        <loading-button :loading="form.processing" class="btn-indigo" type="submit">Create Children
                        </loading-button>
                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import LoadingButton from '@/Shared/LoadingButton'
import InputText from '@/Shared/InputText'

export default {
    metaInfo: { title: 'Create Children' },
    components: {
        InputText,
        AppLayout,
        LoadingButton
    },
    remember: 'form',
    data() {
        return {
            form: this.$inertia.form({
                name: null
            })
        }
    },
    methods: {
        store() {
            this.form.post(this.route('children.store'))
        }
    }
}
</script>
