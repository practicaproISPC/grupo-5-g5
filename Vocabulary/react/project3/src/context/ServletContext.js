import React, {createContext, useEffect, useState, useContext} from 'react';
import Axios  from "axios";

const ServletContext = createContext({})

export const ServletContextProvider = ({children}) => {
    const [loading, setLoading] = useState(true)

    const [list, setList] = useState(null)

    useEffect(() => {
        const config = {
            
            url: 'http://127.0.0.1:5500/public/json/categories.json'
            
/*             url: 'http://localhost:8080/projectVocabulary/categories',
            method: 'get',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'origin':'x-requested-with',
                'Access-Control-Allow-Headers': 'POST, GET, PUT, DELETE, OPTIONS, HEAD, Authorization, Origin, Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers, Access-Control-Allow-Origin',
                'Content-Type': 'application/json',
            }, */
        };
        Axios(config)
            .then((response) => {
                setList(response.data);
                setLoading(false);
            })
            .catch((error) => {
                console.log(error);
            });
        }, [setList]);

    if (loading) {
        return <p> cargando...</p>
    }

    return (
        <ServletContext.Provider
        value={list}
        >
            {children}
        </ServletContext.Provider>
    )
}

export const useServlet = () => {
    try {
        const context = useContext(ServletContext)
        return context
    } catch (error) {
        return console.error(error);
    }
}