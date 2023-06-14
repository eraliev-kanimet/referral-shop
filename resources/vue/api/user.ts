import axios from "../plugins/axios";

import {User} from "../stores/user";

type OAuthResponse = {
    user: User,
    token: string
}

type OAuthRegisterData = {
    email: string,
    phone: string,
    password: string,
    password_confirmation: string
}

type OAuthLoginData = {
    email: string,
    password: string
}

export const OAuthRegister = async (data: OAuthRegisterData): Promise<OAuthResponse> => await axios.post('/oauth/register', data)
    .then(response => response?.data)

export const OAuthLogin = async (data: OAuthLoginData): Promise<OAuthResponse> => await axios.post('/oauth/login', data)
    .then(response => response?.data)
