import axios from "../plugins/axios";
import {SiteResponse} from "./types";

export const Init = async (): Promise<SiteResponse> => {
    return await axios.get('index').then(response => response.data)
}
