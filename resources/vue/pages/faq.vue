<script setup lang="ts">
const items = [
    {
        id: 1,
        question: 'What is the difference between Viagra, Cialis, Levitra, Soft and Regular?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    },
    {
        id: 2,
        question: 'Do you require a prescription?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    },
    {
        id: 3,
        question: 'What are you shipping methods?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    },
    {
        id: 4,
        question: 'What medication do you offer?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    },
    {
        id: 5,
        question: 'How can one place an order?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    },
    {
        id: 6,
        question: 'What are your available payment methods?',
        answer: 'A prescription is not required. Please consult a Health Care Provider before taking this or that medicine. It is important to take into consideration some contra-indications or diseases a patient may have. Only a specialist can prescribe the exact medication and the required dosage.'
    }
]
</script>

<template>
    <div class="container">
        <h1>FAQ</h1>
        <div class="faq my-4" id="faq">
            <div class="faq-item border mb-3" v-for="item in items">
                <div
                    class="faq-question p-3 collapsed"
                    data-toggle="collapse"
                    data-parent="#faq"
                    :data-target="'#faq0' + item.id"
                    aria-expanded="false">
                    <div class="faq-question-body">
                        <span class="text-muted">Q:</span>
                        {{ item.question }}
                    </div>
                    <button class="px-1 btn btn-sm"><i class="icon-plus icon-inline"></i></button>
                </div>
                <div class="collapse" id="faq01">
                    <div class="faq-answer pr-3 pb-3 pl-3">
                        <span class="text-muted">A:</span>
                        {{ item.answer }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
