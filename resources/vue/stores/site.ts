import {defineStore} from "pinia";

import {useUserStore} from "./user";

import {Init} from "../api/site";

type TestimonialsItem = {
    id: number,
    name: string,
    address: string,
    avatar?: string|null,
    initial: string,
    content: string
}

type FaqItem = {
    id: number,
    question: string,
    answer: string,
}

export type Category = {
    id: number,
    name: {
        en: string,
        de: string,
        fr: string,
        es: string,
        it: string,
    },
    slug: string,
    image: string,
    products: number
}

type SiteRootState = {
    testimonials: TestimonialsItem[],
    faq: FaqItem[],
    categories: Category[],
    country: string,
    is_loading: boolean,
    lang: string
}

export const useSiteStore = defineStore('site', {
    state: (): SiteRootState => ({
        testimonials: [],
        faq: [
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
        ],
        country: '',
        lang: 'en',
        is_loading: true,
        categories: []
    }),
    actions: {
        async init() {
            if (this.is_loading) {
                const userStore = useUserStore()

                await Init(userStore.token).then(response => {
                    userStore.$patch((state) => {
                        state.isAuth = response.isAuth;

                        if (response.isAuth) {
                            state.user = response.user;
                        }
                    })

                    this.country = response.country
                    this.categories = response.categories
                    this.testimonials = response.testimonials
                })

                this.is_loading = false
            }
        }
    },
    getters: {
        some_categories: state => {
            return state.categories.slice(0, 12)
        }
    }
})
