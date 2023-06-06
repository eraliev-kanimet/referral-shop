import axios from "../plugins/axios";
import {User} from "../stores/types";

type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User
}

export const Init = async (): Promise<SiteResponse> => await axios.get('index')
    .then(response => response.data)
