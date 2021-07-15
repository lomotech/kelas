<template>
    <div>
        <label v-if="label"
               class="block text-sm font-medium text-gray-700"
               :for="id">
            {{ label }}
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <input :id="id"
                   ref="input"
                   v-bind="$attrs"
                   class="block w-full pr-10 placeholder-red-300 focus:outline-none sm:text-sm rounded-md"
                   :class="{ error: 'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500' }"
                   :type="type"
                   :value="value"
                   @input="$emit('input', $event.target.value)"/>
        </div>
        <p v-if="error"
           class="mt-2 text-sm text-red-600"
           :id="id-error">
            {{ error }}
        </p>
    </div>
</template>

<script>
export default {
    props: {
        id: {
            type: String
        },
        type: {
            type: String,
            default: 'text'
        },
        value: String,
        label: String,
        error: String
    },
    methods: {
        focus() {
            this.$refs.input.focus()
        },
        select() {
            this.$refs.input.select()
        },
        setSelectionRange(start, end) {
            this.$refs.input.setSelectionRange(start, end)
        }
    }
}
</script>
