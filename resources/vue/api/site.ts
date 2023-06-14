import axios from "../plugins/axios";
import {User} from "../stores/user";
import {Category} from "../stores/site";

type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User,
    categories: Category[]
}

export const Init = async (token: string): Promise<SiteResponse> => {
    return await axios.get('index', {
        headers: {
            'Authorization': 'Bearer ' + token
        }
    }).then(response => response.data)
}
