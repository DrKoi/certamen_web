
const getMedidas = async ()=>{

    let r = await axios.get("api/medidas/get");
    return r.data;
    
};