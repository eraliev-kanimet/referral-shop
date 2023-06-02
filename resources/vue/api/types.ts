import {User} from "../stores/types";

export type SiteResponse = {
    isAuth: boolean;
    country: string;
    user: User
}
