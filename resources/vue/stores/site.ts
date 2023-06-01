import {defineStore} from "pinia";
import {SiteRootState} from "./types";

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
            ]
        }
    }
})
