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
        faq: [],
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
                    this.faq = response.faq
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
