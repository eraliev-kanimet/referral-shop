import {defineStore} from "pinia";
import {SiteRootState} from "./types";
import {useUserStore} from "./user";
import {Init} from "../api/site";

export const useSiteStore = defineStore('site', {
    state: (): SiteRootState => {
        return {
            testimonials: [
                {
                    id: 1,
                    name: 'Bernie McAllister',
                    address: 'Australia',
                    avatar: '',
                    initial: 'BM',
                    content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
                },
                {
                    id: 2,
                    name: 'James Morris',
                    address: 'Canada',
                    avatar: 'tmp/author-1.png',
                    initial: '',
                    content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
                },
                {
                    id: 3,
                    name: 'Darrell Clinard',
                    address: 'Kentucky',
                    avatar: 'tmp/author-2.png',
                    initial: '',
                    content: 'Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)'
                },
                {
                    id: 4,
                    name: 'Bernie McAllister',
                    address: 'Australia',
                    avatar: '',
                    initial: 'BM',
                    content: 'Thank you for the fantastic customer service.'
                },
                {
                    id: 5,
                    name: 'James Morris',
                    address: 'Canada',
                    avatar: 'tmp/author-1.png',
                    initial: '',
                    content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
                },
                {
                    id: 6,
                    name: 'James Morris',
                    address: 'Canada',
                    avatar: 'tmp/author-2.png',
                    initial: '',
                    content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
                },
            ],
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
            is_loading: true
        }
    },
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
                })

                this.is_loading = false
            }
        }
    }
})
