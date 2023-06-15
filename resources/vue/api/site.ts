import axios from "../plugins/axios";

import {User} from "../stores/user";

type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User,
    categories: [],
    testimonials: [],
    faq: [],
}

export const Init = async (token: string): Promise<SiteResponse> => {
    return await axios.get('index', {
        headers: {
            'Authorization': 'Bearer ' + token
        }
    }).then(response => response.data)
}
