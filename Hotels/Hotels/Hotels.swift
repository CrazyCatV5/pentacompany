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
    init(){
        setupHotels()
    }
    
    func setupHotels(){
        for i in 0...7 {
            let image = UIImage(named: String(i))!
            images.append(image)
            let rating = String (Double(Int.random(in: 10...50))/10)
            ratings.append(rating)
            let name = String(i) + String(" отель")
            names.append(name)
            let  quantityOfReviews = String (Int.random(in: 2...100)) + String(" отзывов")
            quantitiesOfReviews.append(quantityOfReviews)
        }
    }
}
