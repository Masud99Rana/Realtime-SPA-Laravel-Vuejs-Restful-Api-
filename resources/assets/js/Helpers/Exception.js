

import User from './User';

class Exception{
    handle(error){
        this.isExipred(error.response.data.error)
    }

    isExipred(error){
        if(error == 'Token is Expired'){
            User.logout()
        }

        // if(error == 'Token is Invalid'){
        //     User.logout()
        // }
    }
}

export default Exception = new Exception()