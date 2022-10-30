const Joi = require('joi');
const mongoose = require('mongoose');



mongoose.connect('mongodb://localhost:27017/smartments', {useUnifiedTopology:true, useNewUrlParser:true})
.then(() => console.log('Connected to MonogDB...'))
.catch(err => console.error('Could not connect to MongoDB...', err));

/*  Building Schema
    Adding the attributes with the data type 
    Tenants model
*/
const userSchema = new mongoose.Schema({
    name: {
        type: String, 
        required: true,
        minlength: 5,
        maxlength: 50
    },
    email: {
        type: String, 
        required: true,
        minlength: 5,
        maxlength: 100,
        unique: true
    },
    password: {
        type: String, 
        required: true,
        minlength: 5,
        maxlength: 1024
    }
});

const User = mongoose.model('User', userSchema);


async function createUser(){
    const tenant = new Tenant({
        name: 'Ricky ',
        email: 'rnunezcu@mtu.edu' ,
        password: 'changeMe'
        });
    /*  handling rejections of promises  */
    try{
        const result = await tenant.save();
        console.log(result);
    }
    catch (ex) {
        console.log(ex.message);
    }
}



async function removeUser(id){
    // const result =  await Tenant.deleteOne({ _id: id });
    const result = await User.findByIdAndRemove(id);
    console.log(result);
}

// createUser();
// removeUser('633d8c8bd0005efb05a8635e');


/*  FUNCTION  */
function validateUser(user){
    const schema = Joi.object({
        name: Joi.string().min(3).required(),
        email: Joi.string().min(3).required(),
        password: Joi.string().min(3).required()

    });

    //input validation using joi
    return schema.validate(user);
}

exports.User = User;
exports.validateUser = validateUser;
exports.userSchema = userSchema;
