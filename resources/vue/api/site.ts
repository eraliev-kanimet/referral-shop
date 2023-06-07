import axios from "../plugins/axios";
import {User} from "../stores/types";

type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User
}

export const Init = async (token: string): Promise<SiteResponse> => {
    return await axios.get('index', {
        headers: {
            'Authorization': 'Bearer ' + token
        }
    }).then(response => response.data)
}
