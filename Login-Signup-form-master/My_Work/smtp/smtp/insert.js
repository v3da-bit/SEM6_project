const fs=require('fs')
const data=require('../../dataTransfer')

fs.writeFile('./dynamicData.json',JSON.stringify(data),(err)=>{
    if(err){
        console.log(err)
    }else{
        console.log("successfully submitted")
    }
})
