import axios from "../plugins/axios";

import {User} from "../stores/user";

type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User,
    categories: [],
    testimonials: [],
    articles: [],
    faq: [],
}

export const Init = async (token: string): Promise<SiteResponse> => {
    return await axios.get('index', {
        headers: {
            'Authorization': 'Bearer ' + token
        }
    }).then(response => response.data)
}

export const Subscribe = async (email: string) => {
    return await axios.post('form/subscribe', {email})
}

export const ContactUs = async (data: object) => {
    return await axios.post('form/contact_us', data)
}

export const Callback = async (phone: string) => {
    return await axios.post('form/callback', {phone})
}
