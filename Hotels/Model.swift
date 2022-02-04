//
//  Model.swift
//  Hotels
//
//  Created by wsr4 on 04.02.2022.
//

import Foundation
import UIKit



struct Hotel: Decodable {
    let id: Int
    let name: String
    let short_description: String
    let description: String
    let stars: Int
    let rating: String
    let country: String
    let city: String
    let address: String
    let image: String
    let created_at: String
    let updated_at: String
    let comment: [Comment]
}

struct Comment: Decodable{
    let id: Int
    let hotel_id: Int
    let user_id: Int
    let name: String
    let text: String
    let rating: Int
    let like: Bool
    let dislike: Bool
    let created_at: String
    let updated_at: String
}
