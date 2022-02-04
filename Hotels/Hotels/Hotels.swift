//
//  Hotels.swift
//  Hotels
//
//  Created by wsr4 on 02.02.2022.
//

import Foundation
import UIKit

class Hotels{
   
    var images  = [UIImage]()
    var star = UIImage(named: "star1")!
    var ratings = [String]()
    var names = [String]()
    var quantitiesOfReviews = [String]()
    
    
    /*func parsing (){
       let urlString = "http://localhost/api/test"
       guard let url = URL(string: urlString) else {return}
       
       URLSession.shared.dataTask(with: url) { [self] data, response, error in
           if let error = error {
               print(error)
               return
           }
           
           guard let data = data else {
               return
           }
           //let jsonString = String(data: data, encoding: .utf8)
           //print(jsonString)
           //2022-02-03T11:41:40.000000Z
           do {
               let decoder = JSONDecoder()
              
               let dateFormatter = DateFormatter()
               dateFormatter.dateFormat = "yyyy-MM-ddTHH:mm.ss"
               decoder.dateDecodingStrategy = .formatted(dateFormatter)
               hotelss = try decoder.decode([Hotel].self, from: data)
               for i in 0...2 {
                   let name = hotelss[i].name
                   names.append(name)
                   print(names[i])
               }
           }catch{
               print(error)
           }
           
       }.resume()
   }*/
    
    init(){
        //parsing ()
        setupHotels()
    }
     
    func setupHotels() {
        
        
        for i in 0...7 {
            let image = UIImage(named: String(i))!
            images.append(image)
            let rating = String (Double(Int.random(in: 10...50))/10)
            ratings.append(rating)
            //let name = String(i)
            //names.append(name)
            let  quantityOfReviews = String (Int.random(in: 2...100)) + String(" отзывов")
            quantitiesOfReviews.append(quantityOfReviews)
        }
    }
}
