//
//  Reviews.swift
//  Hotels
//
//  Created by wsr4 on 03.02.2022.
//

import Foundation
import UIKit

class Reviews{
    var star = UIImage(named: "star1")!
    var names = [String]()
    var ratings = [Int]()
    var textsOfReview = [String]()
    init(){
        setupReviews()
    }
    
    func setupReviews(){
        for i in 0...7 {
            let rating =  Int.random(in: 1...5)
            ratings.append(rating)
            let name = String("Гость ") + String(i)
            names.append(name)
            let  textOfReview =  String("отзыв ") +  String((Int.random(in: 1...100)))
            textsOfReview.append(textOfReview)
        }
    }
}
