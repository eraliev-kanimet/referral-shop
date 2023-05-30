import axios from "axios";

const _axios = axios.create({
    baseURL: import.meta.env.VITE_APP_URL + '/api'
});

_axios.interceptors.request.use(
    function (config) {
        return config
    },
    function (error) {
        return Promise.reject(error)
    }
);

_axios.interceptors.response.use(
    function (response) {
        return response
    },
    async function (error) {
        return await Promise.reject(error)
    }
);

export default _axios;
