import {defineStore} from "pinia";

import {useUserStore} from "./user";

import {Init} from "../api/site";

import {Article, Category, FaqItem, TestimonialsItem} from "./types"

type SiteRootState = {
    testimonials: TestimonialsItem[],
    articles: Article[],
    faq: FaqItem[],
    categories: Category[],
    country: string,
    is_loading: boolean,
    lang: string
}

export const useSiteStore = defineStore('site', {
    state: (): SiteRootState => ({
        testimonials: [],
        articles: [],
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
                    this.articles = response.articles
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
