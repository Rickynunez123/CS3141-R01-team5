const mongoose = require('mongoose');
const Joi = require('joi');
const {tenantSchema } = require('./tenants');
const { apartmentSchema } = require('./apartments');
const { landlordSchema } = require('./landlord')


mongoose.connect('mongodb://localhost:27017/smartments', {useUnifiedTopology:true, useNewUrlParser:true})
.then(() => console.log('Connected to MonogDB...'))
.catch(err => console.error('Could not connect to MongoDB...', err));

/*  Building Schema
    Adding the attributes with the data type 
    Building model 
*/
const buildingSchema = new mongoose.Schema({
    buildingName: String,
    buildingAddress: String,
    numberOfApartments: Number,
    apartmentsAvailable: {
        type: Number,
        requires: true,
        min: 0,
        max: 30},
    tenant: {
        type: tenantSchema,
        required: true
    },
    apartment: {
        type: apartmentSchema,
        required: true
    },
    landlord: {
        type: landlordSchema,
        required: true
    }
});


const Building = mongoose.model('Building', buildingSchema);

/*  Add filters  */
async function getBuilding(){
    return await Building
    .find()
    .select({buildingName: 1, apartmentsAvailable: 1})
}


/*  print  */
async function run(){
    const landlord = await getBuilding();
    console.log(landlord);
}

// async function createBuilding(){
//     const building = new Building({
//         buildingName: 'Suriana Tower',
//         buildingAddress: '1800 Oak NY',
//         numberOfApartments: 50,
//         ownsBy: 'Veronica Cuesta',
//         apartmentsAvailable: 28,
//         apartmentUseBy : createTenant()
//     });
// try{
//     const result = await building.save();
//     console.log(result);
// }

//     catch (ex) {
//         console.log(ex.message);
// }
// }


/*  Updating queries  */
// async function updateBuilding(id){
//     const building = await Building.findById(id);
//     if(! building) return;


//     const result = await building.save();
//     console.log(result);
// }

// async function updateApartments(id){
//     const result = await Building.updateOne({ _id: id}, {
//         $set: {
//             buildingName: 'Trump Tower',
//             apartmentsAvailable: 47
//         }
//     });
//     console.log(result);
// }


// createBuilding();
// updateApartments('633d9b0143eba8ae1c586c95');
// updateBuilding('633d915649017e6452d9f9b2');
// run();

/*  
    Validation requirements from Joi
*/
function validateBuilding(building){
    const schema = Joi.object({
        buildingName: Joi.string().min(3).required(),
        buildingAddress: Joi.string().min(3).required(),
        numberOfApartments: Joi.number().min(0).required(),
        apartmentsAvailable: Joi.number(),
        tenantId: Joi.string().required(),
        apartmentId: Joi.string().required(),
        landlordId: Joi.string().required()

    });

    //input validation using joi
    return schema.validate(building);
}


exports.Building = Building;
exports.buildingSchema = buildingSchema;
exports.validateBuilding = validateBuilding;