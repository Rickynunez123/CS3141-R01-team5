const {User, validateUser} = require('../models/user'); //object destructuring
const mongoose = require('mongoose');
const express = require('express');
const router = express.Router(); //use when using express in different files 


///////////////////////////////////////////////////////
/*              Adding Routes                        */
////////////////////////////////////////////////////////


router.post('/', async (req, res) => {
    const result = validateTenant(req.body);
    if (result.error) return res.status(400).send(result.error.details[0].message);

    //check that the user is not already register 
    let user  = await User.findOne({ email: req.body.email })
    if(user) return res.status(400).send('User already registered. ');
    
    user  = new User({
        name: req.body.name,
        password: req.body.password,
        password: req.body.password,
    });

    await user.save() 
    res.send(user); //return user to the client 

});

module.exports = router;